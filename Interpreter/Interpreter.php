<?php


use Context\DeclvContext;
use Context\VarContext;
use Context\ConstContext;
use Context\PintContext;
use Context\PfloatContext;
use Context\PbooleContext;
use Context\PstringContext;
use Context\NumContext;
use Context\FloatContext;
use Context\BooleContext;
use Context\DeclContext;
use Context\StringContext;
use Context\SdecContext;
use Context\NilContext;
use Context\AsigContext;
use Context\DivAsigContext;
use Context\MultAsigContext;
use Context\PlusAsigContext;
use Context\MinusAsigContext;
use Context\IdExprContext;
use Context\ParensContext;
use Context\AddSubContext;
use Context\MulDivModContext;
use Context\RuneContext;
use Context\PruneContext;
use Context\SContext;
use Context\AndOrContext;
use Context\EqNotEqContext;
use Context\MoreLessEqContext;

class Interpreter extends GrammarBaseVisitor
{
    public array $errorTable = [];
    public array $scopes = [];
    public int $erCount = 0;
    public int $syCount = 0;

    private function enterScope(string $scopeName): void
    {
        $this->scopes[] = [
            "name" => $scopeName,
            "symbols" => []
        ];
    }

    private function exitScope(): void
    {
        array_pop($this->scopes);
    }

    private function declare(string $name, array $info): bool
    {
        $currentScope = &$this->scopes[count($this->scopes) - 1]["symbols"];

        if (isset($currentScope[$name])) {
            return false;
        }

        $currentScope[$name] = $info;
        return true;
    }

    private function resolve(string $name): ?array
    {
        for ($i = count($this->scopes) - 1; $i >= 0; $i--) {
            if (isset($this->scopes[$i]["symbols"][$name])) {
                return $this->scopes[$i]["symbols"][$name];
            }
        }
        return null;
    }


    private function &resolveRef(string $name)
    {
        for ($i = count($this->scopes) - 1; $i >= 0; $i--) {
            if (isset($this->scopes[$i]["symbols"][$name])) {
                return $this->scopes[$i]["symbols"][$name];
            }
        }
        $null = null;
        return $null;
    }

    private function validateType(string $type, $value): bool
    {
        return match ($type) {
            "int32"   => is_int($value) || is_null($value),
            "float32" => is_float($value) || is_null($value),
            "boole"   => is_bool($value) || is_null($value),
            "string"  => is_string($value) || is_null($value),
            "rune"    => is_string($value) || is_null($value) || strlen($value) === 1,
            default   => false
        };
    }

    private function addError(string $desc, $token, string $type = "Semantico"): void
    {
        $this->erCount++;
        $this->errorTable[] = [
            "n"      => $this->erCount,
            "desc"   => $desc,
            "line"   => $token->getLine(),
            "column" => $token->getCharPositionInLine(),
            "type"   => $type
        ];
    }

    private function getTypeFromValue($value): ?string
    {
        if (is_int($value)) {
            return "int32";
        }

        if (is_float($value)) {
            return "float32";
        }

        if (is_bool($value)) {
            return "boole";
        }

        if (is_string($value)) {
            return "string";
        }

        return null;
    }
    private function getEtiquete($value): ?string
    {
        if (is_int($value)) {
            return (string)$value;
        }

        if (is_float($value)) {
            return (string)$value;
        }

        if (is_bool($value)) {
            if ($value) {
                return "true";
            }
            return "false";
        }

        if (is_string($value)) {
            return $value;
        }

        if (is_null($value)) {
            return "nil";
        }

        return null;
    }
    private function getDefaulValue($type): int|float|bool|string|null
    {
        switch ($type) {
            case "string":
                return "";
            case "boole":
                return false;
            case "float32":
                return 0.0;
            case "int32":
                return 0;
            case "rune":
                return  chr(0);
            default:
                return null;
        }
    }
    private function getDefaultEtiquet($type): ?string
    {
        switch ($type) {
            case "string":
                return "" / "";
            case "boole":
                return "false";
            case "float32":
                return "0.0";
            case "int32":
                return "0";
            case "rune":
                return "'\u0000'";
            default:
                return null;
        }
    }
    private function isComparable($left, $right, $op): bool
    {
        switch ($op) {
            case '!=':
            case '==': {
                    if (is_bool($left) || is_bool($right)) {
                        return is_bool($left) && is_bool($right);
                    }
                    if (is_int($left) || is_int($right)) {
                        return !(is_bool($left) || is_bool($right) || (is_string($left) && strlen($left) > 1) || (is_string($right)  && strlen($right) > 1));
                    }
                    if (is_float($left) || is_float($right)) {
                        return !(is_bool($left) || is_bool($right) || (is_string($left) && strlen($left) > 1) || (is_string($right)  && strlen($right) > 1));
                    }
                    if ((is_string($left) && strlen($left) === 1) || (is_string($right) && strlen($right) === 1)) {
                        return !(is_bool($left) || is_bool($right) || is_string($left) || is_string($right));
                    }
                    if (is_string($left) || is_string($right)) {
                        return is_string($left) && is_string($right);
                    }
                }
            case '>':
            case '<':
            case '<=':
            case '>=': {
                    if (is_bool($left) || is_bool($right)) {
                        return false;
                    }
                    if (is_int($left) || is_int($right)) {
                        return !(is_bool($left) || is_bool($right) || (is_string($left) && strlen($left) > 1) || (is_string($right)  && strlen($right) > 1));
                    }
                    if (is_float($left) || is_float($right)) {
                        return !(is_bool($left) || is_bool($right) || (is_string($left) && strlen($left) > 1) || (is_string($right)  && strlen($right) > 1));
                    }
                    if ((is_string($left) && strlen($left) === 1) || (is_string($right) && strlen($right) === 1)) {
                        return !(is_bool($left) || is_bool($right) || is_string($left) || is_string($right));
                    }
                    if (is_string($left) || is_string($right)) {
                        return is_string($left) && is_string($right);
                    }
                }
        }
        return false;
    }

    private function isOperable($left, $right, $op): bool
    {
        switch ($op) {

            case '+':
                if (is_bool($left) || is_bool($right)) {
                    return false;
                }

                if ((is_string($left) && strlen($left) === 1 && is_numeric($right)) || (is_string($right) && strlen($right) === 1 && is_numeric($left))) {
                    return true;
                }

                if (is_string($left) || is_string($right)) {
                    return is_string($left) && is_string($right);
                }


                return (is_int($left) || is_float($left)) &&
                    (is_int($right) || is_float($right));


            case '-':
                return (is_int($left) || is_float($left)) &&
                    (is_int($right) || is_float($right));


            case '*':
                if ((is_int($left) || is_float($left)) &&
                    (is_int($right) || is_float($right))
                ) {
                    return true;
                }

                if (is_string($left) && is_int($right)) {
                    return true;
                }
                if (is_string($right) && is_int($left)) {
                    return true;
                }

                return false;


            case '/':

                return (is_int($left) || is_float($left)) &&
                    (is_int($right) || is_float($right));


            case '%':

                return is_int($left) && is_int($right) || (is_string($right) && is_string($left) && strlen($left) === 1 && strlen($right) === 1);
        }

        return false;
    }



    //-------funciones visit-------------

    public function visitS(SContext $context)
    {
        $this->enterScope("Global");

        $this->visitChildren($context);

        return null;
    }

    public function visitNum(NumContext $context)
    {
        return (int)$context->getText();
    }

    public function visitRune(RuneContext $context)
    {
        $text = $context->getText();
        return substr($text, 1, -1);
    }

    public function visitFloat(FloatContext $context)
    {
        return (float)$context->getText();
    }

    public function visitBoole(BooleContext $context)
    {
        return $context->getText() === "true";
    }

    public function visitString(StringContext $context)
    {
        $text = $context->getText();
        return substr($text, 1, -1);
    }
    public function visitNil(NilContext $context)
    {
        return null;
    }


    public function visitPint(PintContext $context)
    {
        return "int32";
    }

    public function visitPfloat(PfloatContext $context)
    {
        return "float32";
    }

    public function visitPboole(PbooleContext $context)
    {
        return "boole";
    }

    public function visitPstring(PstringContext $context)
    {
        return "string";
    }

    public function visitPrune(PruneContext $context)
    {
        return "rune";
    }

    public function visitVar(VarContext $context)
    {
        return "var";
    }

    public function visitConst(ConstContext $context)
    {
        return "const";
    }
    //-----------------Asignacion-------------------------- 
    public function visitAsig(AsigContext $context)
    {
        $name = $context->ID()->getText();
        $symbol = &$this->resolveRef($name);

        if ($symbol === null) {
            $this->addError(
                "La variable '$name' no ha sido declarada",
                $context->ID()->getSymbol()
            );
            return null;
        }

        if ($symbol["caind"] === "const") {
            $this->addError(
                "La variable '$name' es una constante",
                $context->ID()->getSymbol()
            );
            return null;
        }

        $value = $this->visit($context->expr());

        if (!$this->validateType($symbol["type"], $value)) {
            $this->addError(
                "Tipo incompatible en '$name'",
                $context->ID()->getSymbol()
            );
            return null;
        }

        $symbol["val"] = $value;
        $symbol["etiq"] = $this->getEtiquete($value);

        return null;
    }

    public function visitPlusAsig(PlusAsigContext $context)
    {
        $name = $context->ID()->getText();
        $symbol = &$this->resolveRef($name);

        if ($symbol === null) {
            $this->addError(
                "La variable '$name' no ha sido declarada",
                $context->ID()->getSymbol()
            );
            return null;
        }

        if ($symbol["caind"] === "const") {
            $this->addError(
                "La variable '$name' es una constante",
                $context->ID()->getSymbol()
            );
            return null;
        }

        if ($symbol["etiq"] === "nil") {
            $this->addError(
                "No se puede operar, la variable '$name' es nil",
                $context->ID()->getSymbol()
            );
            return null;
        }

        $value = $this->visit($context->expr());

        if (!$this->validateType($symbol["type"], $value)) {
            $this->addError(
                "Tipos incompatibles para el operador +=",
                $context->ID()->getSymbol()
            );
            return null;
        }

        $symbol["val"] += $value;
        $symbol["etiq"] = $this->getEtiquete($symbol["val"]);

        return null;
    }

    public function visitMinusAsig(MinusAsigContext $context)
    {
        $name = $context->ID()->getText();
        $symbol = &$this->resolveRef($name);

        if ($symbol === null) {
            $this->addError(
                "La variable '$name' no ha sido declarada",
                $context->ID()->getSymbol()
            );
            return null;
        }

        if ($symbol["caind"] === "const") {
            $this->addError(
                "La variable '$name' es una constante",
                $context->ID()->getSymbol()
            );
            return null;
        }

        if ($symbol["etiq"] === "nil") {
            $this->addError(
                "No se puede operar, la variable '$name' es nil",
                $context->ID()->getSymbol()
            );
            return null;
        }

        $value = $this->visit($context->expr());

        if (!$this->validateType($symbol["type"], $value)) {
            $this->addError(
                "Tipos incompatibles para el operador +=",
                $context->ID()->getSymbol()
            );
            return null;
        }

        $symbol["val"] -= $value;
        $symbol["etiq"] = $this->getEtiquete($symbol["val"]);

        return null;
    }

    public function visitMultAsig(MultAsigContext $context)
    {
        $name = $context->ID()->getText();
        $symbol = &$this->resolveRef($name);

        if ($symbol === null) {
            $this->addError(
                "La variable '$name' no ha sido declarada",
                $context->ID()->getSymbol()
            );
            return null;
        }

        if ($symbol["caind"] === "const") {
            $this->addError(
                "La variable '$name' es una constante",
                $context->ID()->getSymbol()
            );
            return null;
        }

        if ($symbol["etiq"] === "nil") {
            $this->addError(
                "No se puede operar, la variable '$name' es nil",
                $context->ID()->getSymbol()
            );
            return null;
        }

        $value = $this->visit($context->expr());

        if (!$this->validateType($symbol["type"], $value)) {
            $this->addError(
                "Tipos incompatibles para el operador +=",
                $context->ID()->getSymbol()
            );
            return null;
        }

        $symbol["val"] *= $value;
        $symbol["etiq"] = $this->getEtiquete($symbol["val"]);

        return null;
    }

    public function visitDivAsig(DivAsigContext $context)
    {
        $name = $context->ID()->getText();
        $symbol = &$this->resolveRef($name);

        if ($symbol === null) {
            $this->addError(
                "La variable '$name' no ha sido declarada",
                $context->ID()->getSymbol()
            );
            return null;
        }

        if ($symbol["caind"] === "const") {
            $this->addError(
                "La variable '$name' es una constante",
                $context->ID()->getSymbol()
            );
            return null;
        }

        if ($symbol["etiq"] === "nil") {
            $this->addError(
                "No se puede operar, la variable '$name' es nil",
                $context->ID()->getSymbol()
            );
            return null;
        }

        $value = $this->visit($context->expr());
        if ($value === 0) {
            $this->addError(
                "NO se puede dividir entre 0",
                $context->ID()->getSymbol()
            );
            return null;
        }

        if (!$this->validateType($symbol["type"], $value)) {
            $this->addError(
                "Tipos incompatibles para el operador +=",
                $context->ID()->getSymbol()
            );
            return null;
        }

        $symbol["val"] /= $value;
        $symbol["etiq"] = $this->getEtiquete($symbol["val"]);

        return null;
    }

    //---------------Declaraciones-------------------



    public function visitDeclv(DeclvContext $context)
    {
        $ids  = $context->lid()->ID();
        $vals = $context->lval()->expr();
        $caind = $context->pre()->getText();
        $type = $this->visit($context->type());

        if (count($ids) != count($vals)) {
            $this->addError(
                "Cantidad de identificadores y valores no coincide",
                $ids[0]->getSymbol()
            );
            return null;
        }

        for ($i = 0; $i < count($ids); $i++) {

            $name  = $ids[$i]->getText();
            $value = $this->visit($vals[$i]);

            if ($caind === "const" && is_null($value)) {
                $this->addError(
                    "No se pueden inicializar constantes como nil",
                    $ids[$i]->getSymbol()
                );
                continue;
            }

            if (!$this->validateType($type, $value)) {
                $this->addError(
                    "Tipo incompatible en '$name'",
                    $ids[$i]->getSymbol()
                );
                continue;
            }

            if (!$this->declare($name, [])) {
                $this->addError(
                    "Identificador '$name' ya fue declarado en este scope",
                    $ids[$i]->getSymbol()
                );
                continue;
            }


            $this->syCount++;

            $currentScope = &$this->scopes[count($this->scopes) - 1]["symbols"];

            $currentScope[$name] = [
                "n" => $this->syCount,
                "caind" => $caind,
                "type" => $type,
                "val"  => $value,
                "etiq" => $this->getEtiquete($value)
            ];
        }

        return null;
    }


    public function visitDecl(DeclContext $context)
    {
        $ids  = $context->lid()->ID();
        $caind = $context->pre()->getText();
        $type = $this->visit($context->type());
        $value = $this->getDefaulValue($type);

        for ($i = 0; $i < count($ids); $i++) {

            $name = $ids[$i]->getText();

            if ($caind === "const") {
                $this->addError(
                    "No se puede usar esta declaracion para constantes",
                    $ids[$i]->getSymbol()
                );
                continue;
            }

            if (!$this->declare($name, [])) {
                $this->addError(
                    "Identificador '$name' ya fue declarado en este scope",
                    $ids[$i]->getSymbol()
                );
                continue;
            }

            $this->syCount++;

            $currentScope = &$this->scopes[count($this->scopes) - 1]["symbols"];

            $currentScope[$name] = [
                "n" => $this->syCount,
                "caind" => $caind,
                "type" => $type,
                "val"  => $value,
                "etiq" => $this->getDefaultEtiquet($type)
            ];
        }

        return null;
    }

    public function visitSdec(SdecContext $context)
    {
        $ids  = $context->lid()->ID();
        $vals = $context->lval()->expr();

        if (count($ids) != count($vals)) {
            $this->addError(
                "Cantidad de identificadores y valores no coincide",
                $ids[0]->getSymbol()
            );
            return null;
        }

        for ($i = 0; $i < count($ids); $i++) {

            $name  = $ids[$i]->getText();
            $value = $this->visit($vals[$i]);
            $type  = $this->getTypeFromValue($value);

            if (!$this->declare($name, [])) {
                $this->addError(
                    "Identificador '$name' ya fue declarado en este scope",
                    $ids[$i]->getSymbol()
                );
                continue;
            }


            $this->syCount++;

            $currentScope = &$this->scopes[count($this->scopes) - 1]["symbols"];

            $currentScope[$name] = [
                "n" => $this->syCount,
                "caind" => "var",
                "type" => $type,
                "val"  => $value,
                "etiq" => $this->getEtiquete($value)
            ];
        }

        return null;
    }

    // ---------------- Expresiones ----------------

    public function visitAndOr(AndOrContext $context)
    {
        $left  = $this->visit($context->expr(0));
        $right = $this->visit($context->expr(1));
        $op    = $context->op->getText();

        if (!(is_bool($right) && is_bool($left))) {
            $this->addError(
                "Elos operadores && y || solo se pueden usar entre booleanos",
                $context->op
            );
            return null;
        }

        if (!$left && $op === "&&") {
            return false;
        }

        return match ($op) {
            "&&" => $left && $right,
            "||" => $left || $right,
        };
    }

    public function visitEqNotEq(EqNotEqContext $context)
    {
        $left  = $this->visit($context->expr(0));
        $right = $this->visit($context->expr(1));
        $op    = $context->op->getText();

        if (is_null($left) || is_null($right)) {
            $this->addError(
                "No se puede comparar nil",
                $context->op
            );
            return null;
        }

        if (!$this->isComparable($left, $right, $op)) {
            $this->addError(
                "Comparacion invalida entre tipos incompatibles",
                $context->op
            );
            return null;
        }

        if ($op == "==" && is_numeric($left) && is_string($right) && strlen($right) === 1) {
            return $left === ord($right);
        }
        if ($op == "==" && is_string($left) && is_numeric($right) && strlen($left) === 1) {
            return  ord($left) === $right;
        }
        if ($op == "!=" && is_numeric($left) && is_string($right) && strlen($right) === 1) {
            return $left !== ord($right);
        }
        if ($op == "!=" && is_string($left) && is_numeric($right) && strlen($left) === 1) {
            return  ord($left) !== $right;
        }


        return match ($op) {
            "==" => $left === $right,
            "!=" => $left !== $right
        };
    }

    public function visitMoreLessEq(MoreLessEqContext $context)
    {
        $left  = $this->visit($context->expr(0));
        $right = $this->visit($context->expr(1));
        $op    = $context->op->getText();

        if (is_null($left) || is_null($right)) {
            $this->addError(
                "No se puede comparar nil",
                $context->op
            );
            return null;
        }
        if (!$this->isComparable($left, $right, $op)) {
            $this->addError(
                "Comparacion invalida entre tipos incompatibles",
                $context->op
            );
            return null;
        }

        if ($op == "<=" && is_numeric($left) && is_string($right) && strlen($right) === 1) {
            return $left <= ord($right);
        }
        if ($op == "<=" && is_string($left) && is_numeric($right) && strlen($left) === 1) {
            return ord($left) <= $right;
        }
        if ($op == ">=" && is_numeric($left) && is_string($right) && strlen($right) === 1) {
            return $left >= ord($right);
        }
        if ($op == ">=" && is_string($left) && is_numeric($right) && strlen($left) === 1) {
            return  ord($left) >= $right;
        }
        if ($op == ">" && is_numeric($left) && is_string($right) && strlen($right) === 1) {
            return $left > ord($right);
        }
        if ($op == ">" && is_string($left) && is_numeric($right) && strlen($left) === 1) {
            return  ord($left) > $right;
        }
        if ($op == "<" && is_numeric($left) && is_string($right) && strlen($right) === 1) {
            return $left < ord($right);
        }
        if ($op == "<" && is_string($left) && is_numeric($right) && strlen($left) === 1) {
            return  ord($left) < $right;
        }

        return match ($op) {
            "<" => $left < $right,
            "<=" => $left <= $right,
            ">" => $left > $right,
            ">=" => $left >= $right
        };
    }

    public function visitIdExpr(IdExprContext $context)
    {
        $name = $context->ID()->getText();

        $symbol = $this->resolve($name);

        if ($symbol === null) {
            $this->addError(
                "La variable '$name' no ha sido declarada",
                $context->ID()->getSymbol()
            );
            return null;
        }

        return $symbol["val"];
    }

    public function visitParens(ParensContext $context)
    {
        return $this->visit($context->expr());
    }

    public function visitAddSub(AddSubContext $context)
    {
        $left  = $this->visit($context->expr(0));
        $right = $this->visit($context->expr(1));
        $op    = $context->op->getText();

        if (is_null($left) || is_null($right)) {
            $this->addError(
                "No se puede operar nil",
                $context->op
            );
            return null;
        }


        if (!$this->isOperable($left, $right, $op)) {
            $this->addError(
                "Operacion invalida entre tipos incompatibles",
                $context->op
            );
            return null;
        }

        if ($op == "+" && is_string($left) && is_string($right) && strlen($left) === 1 && strlen($right) === 1) {
            return ord($left) + ord($right);
        }
        if ($op == "-" && is_string($left) && is_string($right) && strlen($left) === 1 && strlen($right) === 1) {
            return  ord($left) - ord($right);
        }
        if ($op == "+" && is_numeric($left) && is_string($right) && strlen($right) === 1) {
            return $left + ord($right);
        }
        if ($op == "+" && is_string($left) && is_numeric($right) && strlen($left) === 1) {
            return ord($left)  + $right;
        }
        if ($op == "-" && is_numeric($left) && is_string($right) && strlen($right) === 1) {
            return $left - ord($right);
        }
        if ($op == "-" && is_string($left) && is_numeric($right) && strlen($left) === 1) {
            return  ord($left) - $right;
        }

        return match ($op) {
            "+" => $left + $right,
            "-" => $left - $right,
        };
    }

    public function visitMulDivMod(MulDivModContext $context)
    {
        $left  = $this->visit($context->expr(0));
        $right = $this->visit($context->expr(1));
        $op    = $context->op->getText();

        if (is_null($left) || is_null($right)) {
            $this->addError(
                "No se puede operar nil",
                $context->op
            );
            return null;
        }

        if (!$this->isOperable($left, $right, $op)) {
            $this->addError(
                "Operacion invalida entre tipos incompatibles",
                $context->op
            );
            return null;
        }

        if ($op === "/" && $right == 0) {
            $this->addError("No se puede dividir entre 0", $context->op);
            return null;
        }

        if ($op == "*" && is_string($left) && is_int($right)) {
            $res = $left;
            for ($i = 0; $i < $right - 1; $i++) {
                $left = $left . $res;
            }
            return $left;
        }
        if ($op == "*" && is_string($right) && is_int($left)) {
            $res = $right;
            for ($i = 0; $i < $left - 1; $i++) {
                $right = $right . $res;
            }
            return $right;
        }

        if ($op == "*" && is_string($left) && is_string($right) && strlen($left) === 1 && strlen($right) === 1) {
            return ord($left) * ord($right);
        }
        if ($op == "/" && is_string($left) && is_string($right) && strlen($left) === 1 && strlen($right) === 1) {
            return  ord($left) / ord($right);
        }
        if ($op == "*" && is_numeric($left) && is_string($right) && strlen($right) === 1) {
            return $left * ord($right);
        }
        if ($op == "*" && is_string($left) && is_numeric($right) && strlen($left) === 1) {
            return  ord($left) * $right;
        }
        if ($op == "/" && is_numeric($left) && is_string($right) && strlen($right) === 1) {
            return $left / ord($right);
        }
        if ($op == "/" && is_string($left) && is_numeric($right) && strlen($left) === 1) {
            return  ord($left) / $right;
        }

        return match ($op) {
            "*" => $left * $right,
            "/" => $left / $right,
            "%" => $left % $right,
        };
    }
}
