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


class Interpreter extends GrammarBaseVisitor
{
    public array $symbolTable = [];
    public array $errorTable = [];
    public int $erCount = 0;
    public int $syCount = 0;

    private function validateType(string $type, $value): bool
    {
        return match ($type) {
            "int32"   => is_int($value) | is_null($value),
            "float32" => is_float($value) | is_null($value),
            "boole"   => is_bool($value) | is_null($value),
            "string"  => is_string($value) | is_null($value),
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
            default:
                return null;
        }
    }
    private function getDefaultEtiquet($type): ?string
    {
        switch ($type) {
            case "string":
                return "''";
            case "boole":
                return "false";
            case "float32":
                return "0.0";
            case "int32":
                return "0";
            default:
                return null;
        }
    }
    private function isOperable($izqVal, $derVal, $op): bool
    {
        switch ($op) {

            case '+':
                if (is_bool($izqVal) || is_bool($derVal)) {
                    return false;
                }

                if (is_string($izqVal) || is_string($derVal)) {
                    return is_string($izqVal) && is_string($derVal);
                }

                return (is_int($izqVal) || is_float($izqVal)) &&
                    (is_int($derVal) || is_float($derVal));


            case '-':
                return (is_int($izqVal) || is_float($izqVal)) &&
                    (is_int($derVal) || is_float($derVal));


            case '*':
                if ((is_int($izqVal) || is_float($izqVal)) &&
                    (is_int($derVal) || is_float($derVal))
                ) {
                    return true;
                }

                if (is_string($izqVal) && is_int($derVal)) {
                    return true;
                }
                if (is_string($derVal) && is_int($izqVal)) {
                    return true;
                }

                return false;


            case '/':

                return (is_int($izqVal) || is_float($izqVal)) &&
                    (is_int($derVal) || is_float($derVal));


            case '%':

                return is_int($izqVal) && is_int($derVal);
        }

        return false;
    }


    private function isDuplicate(string $name): bool
    {
        return array_key_exists($name, $this->symbolTable);
    }



    //-------funciones visit-------------


    public function visitNum(NumContext $context)
    {
        return (int)$context->getText();
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
        if (!$this->isDuplicate($name)) {
            $this->addError(
                "La variable '$name' no ha sido declarada",
                $context->ID()->getSymbol()
            );
            return null;
        }
        if ($this->symbolTable[$name]["caind"] === "const") {
            $this->addError(
                "La variable '$name' es una constante",
                $context->ID()->getSymbol()
            );
            return null;
        }

        $value = $this->visit($context->expr());
        $type = $this->symbolTable[$name]["type"];

        if (!$this->validateType($type, $value)) {
            $this->addError(
                "Tipo incompatible en '$name'",
                $context->ID()->getSymbol()
            );
            return null;
        }

        $this->symbolTable[$name]["val"] = $value;
        $this->symbolTable[$name]["etiq"] = $this->getEtiquete($value);
        return null;
    }

    public function visitPlusAsig(PlusAsigContext $context)
    {
        $name = $context->ID()->getText();
        if (!$this->isDuplicate($name)) {
            $this->addError(
                "La variable '$name' no ha sido declarada",
                $context->ID()->getSymbol()
            );
            return null;
        }
        if ($this->symbolTable[$name]["caind"] === "const") {
            $this->addError(
                "La variable '$name' es una constante",
                $context->ID()->getSymbol()
            );
            return null;
        }

        $value = $this->visit($context->expr());
        $type = $this->symbolTable[$name]["type"];

        if (!$this->validateType($type, $value)) {
            $this->addError(
                "Tipos incompatibles en  para el operador +=",
                $context->ID()->getSymbol()
            );
            return null;
        }

        if ($this->symbolTable[$name]["etiq"] === "nil") {
            $this->addError(
                "No se puede operar, la variable '$name' es nil",
                $context->ID()->getSymbol()
            );
            return null;
        }

        $this->symbolTable[$name]["val"] += $value;
        $this->symbolTable[$name]["etiq"] = $this->getEtiquete($this->symbolTable[$name]["val"]);
        return null;
    }
    public function visitMinusAsig(MinusAsigContext $context)
    {
        $name = $context->ID()->getText();
        if (!$this->isDuplicate($name)) {
            $this->addError(
                "La variable '$name' no ha sido declarada",
                $context->ID()->getSymbol()
            );
            return null;
        }
        if ($this->symbolTable[$name]["caind"] === "const") {
            $this->addError(
                "La variable '$name' es una constante",
                $context->ID()->getSymbol()
            );
            return null;
        }

        $value = $this->visit($context->expr());
        $type = $this->symbolTable[$name]["type"];

        if (!$this->validateType($type, $value)) {
            $this->addError(
                "Tipos incompatibles en  para el operador -=",
                $context->ID()->getSymbol()
            );
            return null;
        }

        if ($this->symbolTable[$name]["etiq"] === "nil") {
            $this->addError(
                "No se puede operar, la variable '$name' es nil",
                $context->ID()->getSymbol()
            );
            return null;
        }

        $this->symbolTable[$name]["val"] -= $value;
        $this->symbolTable[$name]["etiq"] = $this->getEtiquete($this->symbolTable[$name]["val"]);
        return null;
    }

    public function visitMultAsig(MultAsigContext $context)
    {
        $name = $context->ID()->getText();
        if (!$this->isDuplicate($name)) {
            $this->addError(
                "La variable '$name' no ha sido declarada",
                $context->ID()->getSymbol()
            );
            return null;
        }
        if ($this->symbolTable[$name]["caind"] === "const") {
            $this->addError(
                "La variable '$name' es una constante",
                $context->ID()->getSymbol()
            );
            return null;
        }

        $value = $this->visit($context->expr());
        $type = $this->symbolTable[$name]["type"];

        if (!$this->validateType($type, $value)) {
            $this->addError(
                "Tipos incompatibles en  para el operador *=",
                $context->ID()->getSymbol()
            );
            return null;
        }

        if ($this->symbolTable[$name]["etiq"] === "nil") {
            $this->addError(
                "No se puede operar, la variable '$name' es nil",
                $context->ID()->getSymbol()
            );
            return null;
        }

        $this->symbolTable[$name]["val"] *= $value;
        $this->symbolTable[$name]["etiq"] = $this->getEtiquete($this->symbolTable[$name]["val"]);
        return null;
    }

    public function visitDivAsig(DivAsigContext $context)
    {
        $name = $context->ID()->getText();
        if (!$this->isDuplicate($name)) {
            $this->addError(
                "La variable '$name' no ha sido declarada",
                $context->ID()->getSymbol()
            );
            return null;
        }
        if ($this->symbolTable[$name]["caind"] === "const") {
            $this->addError(
                "La variable '$name' es una constante",
                $context->ID()->getSymbol()
            );
            return null;
        }

        $value = $this->visit($context->expr());
        $type = $this->symbolTable[$name]["type"];
        if (!$this->validateType($type, $value)) {
            $this->addError(
                "Tipos incompatibles en  para el operador /=",
                $context->ID()->getSymbol()
            );
            return null;
        }
        if ($value === 0) {
            $this->addError(
                "No se puede dividir entre 0",
                $context->ID()->getSymbol()
            );
            return null;
        }

        if ($this->symbolTable[$name]["etiq"] === "nil") {
            $this->addError(
                "No se puede operar, la variable '$name' es nil",
                $context->ID()->getSymbol()
            );
            return null;
        }

        $this->symbolTable[$name]["val"] /= $value;
        $this->symbolTable[$name]["etiq"] = $this->getEtiquete($this->symbolTable[$name]["val"]);
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

            if ($this->isDuplicate($name)) {
                $this->addError(
                    "Identificador '$name' ya fue declarado",
                    $ids[$i]->getSymbol()
                );
                continue;
            }

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

            $etiq = $this->getEtiquete($value);
            $this->syCount++;
            $this->symbolTable[$name] = [
                "n" => $this->syCount,
                "caind" => $caind,
                "type" => $type,
                "val"  => $value,
                "etiq" => $etiq
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
            $type = $this->getTypeFromValue($value);

            if ($this->isDuplicate($name)) {
                $this->addError(
                    "Identificador '$name' ya fue declarado",
                    $ids[$i]->getSymbol()
                );
                continue;
            }

            $etiq = $this->getEtiquete($value);
            $this->syCount++;
            $this->symbolTable[$name] = [
                "n" => $this->syCount,
                "caind" => "var",
                "type" => $type,
                "val"  => $value,
                "etiq" => $etiq
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
            if ($caind === "const") {
                $this->addError(
                    "No se puede usar esta declaracion para constantes",
                    $ids[$i]->getSymbol()
                );
                continue;
            }

            $name  = $ids[$i]->getText();
            if ($this->isDuplicate($name)) {
                $this->addError(
                    "Identificador '$name' ya fue declarado",
                    $ids[$i]->getSymbol()
                );
                continue;
            }

            $this->syCount++;
            $this->symbolTable[$name] = [
                "n" => $this->syCount,
                "caind" => $caind,
                "type" => $type,
                "val"  => $value,
                "etiq" => $this->getDefaultEtiquet($type)
            ];
        }
        return null;
    }
    // ---------------- Expresiones ----------------

    public function visitIdExpr(IdExprContext $context)
    {
        $name = $context->ID()->getText();

        if (!$this->isDuplicate($name)) {
            $this->addError(
                "La variable '$name' no ha sido declarada",
                $context->ID()->getSymbol()
            );
            return null;
        }

        return $this->symbolTable[$name]["val"];
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

        if (!$this->isOperable($left, $right, $op)) {
            $this->addError(
                "Operacion invalida entre tipos incompatibles",
                $context->op
            );
            return null;
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

        return match ($op) {
            "*" => $left * $right,
            "/" => $left / $right,
            "%" => $left % $right,
        };
    }
}
