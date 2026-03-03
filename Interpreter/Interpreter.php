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
use Context\IfStmtContext;
use Context\AndOrContext;
use Context\EqNotEqContext;
use Context\MoreLessEqContext;
use Context\ProgramContext;
use Context\BlockContext;
use Context\IncDecContext;
use Context\LongForContext;
use Context\InstContext;
use Context\MidForContext;
use Context\ShortForContext;
use Context\PrintlnContext;
use Context\TypeOContext;
use Context\NowFuncContext;
use Context\LenFuncContext;

class BreakException extends \Exception {}
class ContinueException extends \Exception {}

class Interpreter extends GrammarBaseVisitor
{
    public array $errorTable = [];
    public string $console = "";
    public array $symbolTable = [];

    private array $scopes = [];
    private int $inLoop = 0;
    private int $erCount = 0;
    private int $syCount = 0;
    private int $ifCount = 0;
    private int $forCount = 0;
    private int $elseCount = 0;

    private function enterScope(string $scopeName): void
    {
        $this->scopes[] = [
            "name" => $scopeName,
            "symbols" => []
        ];
    }

    private function getCurrentScopeLevelOf(string $name): ?int
    {
        for ($i = count($this->scopes) - 1; $i >= 0; $i--) {
            if (isset($this->scopes[$i]["symbols"][$name])) {
                return $i;
            }
        }
        return null;
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

        if (is_string($value) && strlen($value) === 1) {
            return "rune";
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



    //-------funciones visit-------------------------------------------------------
    public function visitS(SContext $context)
    {
        $this->enterScope("Global");

        $this->visit($context->program());

        return null;
    }

    public function visitProgram(ProgramContext $context)
    {
        $this->enterScope("main");
        $this->visit($context->block());
        $this->exitScope();
        return null;
    }

    public function visitBlock(BlockContext $context)
    {
        foreach ($context->stmts() as $stmt) {
            $this->visit($stmt);
        }
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
    //----------------------------functions---------------------

    public function visitPrintln(PrintlnContext $context)
    {
        $result = null;

        if ($context->expr() === null) {
            $this->addError(
                "debe agragar un valor a la funcion fmt.Println()",
                $context->expr()->getStart()
            );
            return null;
        }

        $result = $this->visit($context->expr());
        $this->console .= $result . "\n";

        return null;
    }

    public function visitTypeO(TypeOContext $context)
    {
        $result = $this->visit($context->expr());
        return $this->getTypeFromValue($result);
    }

    public function visitNowFunc(NowFuncContext $context): string
    {
        return date("Y-m-d H:i:s");
    }

    public function visitLenFunc(LenFuncContext $context): int
    {
        $result = $this->visit($context->expr());

        if (!is_string($result)) { // cambiar cuando se agreguen los arrays
            $this->addError(
                "La len() solo hacepta Strings",
                $context->expr()->getStart()
            );
            return -1;
        }
        return strlen($result);
    }



    //------------------------if------------------------------

    public function visitIfStmt(IfStmtContext $context)
    {
        $condition = $this->visit($context->expr());

        if ($this->getTypeFromValue($condition) !== "boole") {
            $this->addError(
                "La condición del if debe ser booleana",
                $context->expr()->getStart()
            );
            return null;
        }


        if ($condition) {
            $this->ifCount++;
            $this->enterScope("If" . $this->ifCount);
            $this->visit($context->block(0));
            $this->exitScope();
        } else if ($context->ELSE() !== null) {
            $this->elseCount++;
            $this->enterScope("Else" . $this->elseCount);
            $this->visit($context->block(1));
            $this->exitScope();
        }

        return null;
    }

    //-----------------------for----------------------------------------------------

    public function visitInst(InstContext $context)
    {
        if ($this->inLoop === 0) {
            $this->addError(
                "break/continue fuera de un ciclo",
                $context->getStart()
            );
            return null;
        }

        if ($context->BREAK() !== null) {
            throw new BreakException();
        }

        if ($context->CONTINUE() !== null) {
            throw new ContinueException();
        }

        return null;
    }


    public function visitLongFor(LongForContext $context)
    {
        $this->forCount++;
        $this->enterScope("For" . $this->forCount);
        $this->visit($context->dec());;
        $firstId = "";
        $cond = $this->visit($context->expr());
        if (!is_bool($cond)) {
            $this->addError(
                "La condición del for debe ser booleana",
                $context->expr()->getStart()
            );
            return null;
        }

        $decContext = $context->dec();
        if ($decContext instanceof DeclvContext || $decContext instanceof DeclContext || $decContext instanceof SdecContext) {

            $ids = $decContext->lid()->ID();
            if (count($ids) > 1) {
                $this->addError(
                    "En el for solo se puede declara una variable",
                    $context->getStart()
                );
                return null;
            }
            $firstId = $ids[0]->getText();
        }

        $secondtId = $context->incdec()->ID()->getText();

        if ($firstId !== $secondtId) {
            $this->addError(
                "En el for se deben modificar las mismas variables index",
                $context->getStart()
            );
            return null;
        }
        $this->inLoop++;
        while (true) {
            $cond = $this->visit($context->expr());
            if (!$cond) {
                break;
            }
            try {
                $this->visit($context->block());
                $this->visit($context->incdec());
            } catch (ContinueException $e) {
                continue;
            } catch (BreakException $e) {
                $this->exitScope();
                break;
            }
        }

        $this->inLoop--;
        $this->exitScope();
        return null;
    }

    public function visitMidFor(MidForContext $context)
    {
        $this->forCount++;
        $this->enterScope("For" . $this->forCount);
        $this->inLoop++;

        try {

            while (true) {

                $cond = $this->visit($context->expr());

                if (!is_bool($cond)) {
                    $this->addError(
                        "La condición del for debe ser booleana",
                        $context->expr()->getStart()
                    );
                    break;
                }

                if (!$cond) {
                    break;
                }

                try {
                    $this->visit($context->block());
                } catch (ContinueException $e) {
                    continue;
                } catch (BreakException $e) {
                    break;
                }
            }
        } finally {

            $this->inLoop--;
            $this->exitScope();
        }

        return null;
    }

    public function visitShortFor(ShortForContext $context)
    {
        $this->forCount++;
        $this->enterScope("For" . $this->forCount);
        $this->inLoop++;
        $safeCount = 0;

        try {
            while (true) {
                $safeCount++;
                if ($safeCount > 300) {
                    $this->addError(
                        "Bucle Infinito",
                        $context->getStart()
                    );
                    $this->exitScope();
                    break;
                }
                try {
                    $this->visit($context->Block());
                } catch (ContinueException $e) {
                    continue;
                } catch (BreakException $e) {
                    $this->exitScope();
                    break;
                }
            }
        } finally {

            $this->inLoop--;
            $this->exitScope();
        }

        return null;
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

        if ($symbol["kind"] === "const") {
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

        $symbol["val"]  = $value;
        $symbol["etiq"] = $this->getEtiquete($value);
        $scopeLevel = $this->getCurrentScopeLevelOf($name);

        $this->symbolTable[$scopeLevel][$name]["etiq"] = $symbol["etiq"];


        return null;
    }

    public function visitIncDec(IncDecContext $context)
    {
        $name = $context->ID()->getText();
        $symbol = &$this->resolveRef($name);
        $op = $context->op->getText();

        if ($symbol === null) {
            $this->addError("Variable '$name' no declarada", $context->getStart());
            return null;
        }

        if ($symbol["kind"] === "const") {
            $this->addError("No se puede modificar constante '$name'", $context->getStart());
            return null;
        }

        if ($symbol["type"] !== "int32") {
            $this->addError("++ y -- solo funcionan con int32", $context->getStart());
            return null;
        }

        if ($op == '++') {
            $symbol["val"]++;
        } else {
            $symbol["val"]--;
        }

        $symbol["etiq"] = $this->getEtiquete($symbol["val"]);
        $scopeLevel = $this->getCurrentScopeLevelOf($name);
        $this->symbolTable[$scopeLevel][$name]["etiq"] =  $symbol["etiq"];

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

        if ($symbol["kind"] === "const") {
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

        $v = $symbol["val"] + $value;
        $symbol["val"] = $v;
        $symbol["etiq"] = $this->getEtiquete($v);

        $scopeLevel = $this->getCurrentScopeLevelOf($name);
        $this->symbolTable[$scopeLevel][$name]["etiq"] = $symbol["etiq"];
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

        if ($symbol["kind"] === "const") {
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

        $v = $symbol["val"] - $value;
        $symbol["val"] = $v;
        $symbol["etiq"] = $this->getEtiquete($v);

        $scopeLevel = $this->getCurrentScopeLevelOf($name);
        $this->symbolTable[$scopeLevel][$name]["etiq"] = $symbol["etiq"];
        return null;

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

        if ($symbol["kind"] === "const") {
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

        $v = $symbol["val"] * $value;
        $symbol["val"] = $v;
        $symbol["etiq"] = $this->getEtiquete($v);

        $scopeLevel = $this->getCurrentScopeLevelOf($name);
        $this->symbolTable[$scopeLevel][$name]["etiq"] = $symbol["etiq"];

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

        if ($symbol["kind"] === "const") {
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


        $v = $symbol["val"] / $value;
        $symbol["val"] = $v;
        $symbol["etiq"] = $this->getEtiquete($v);

        $scopeLevel = $this->getCurrentScopeLevelOf($name);
        $this->symbolTable[$scopeLevel][$name]["etiq"] = $symbol["etiq"];

        return null;
    }

    //---------------Declaraciones-------------------



    public function visitDeclv(DeclvContext $context)
    {
        $ids  = $context->lid()->ID();
        $vals = $context->lval()->expr();
        $kind = $context->pre()->getText();
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

            if ($kind === "const" && is_null($value)) {
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


            if (!$this->declare($name, []) && $this->inLoop === 0) {
                $this->addError(
                    "Identificador '$name' ya fue declarado en este scope",
                    $ids[$i]->getSymbol()
                );
                continue;
            }

            if ($this->declare($name, [])) {
                $this->syCount++;
            }

            $scopeLevel = count($this->scopes) - 1;
            $currentScope = &$this->scopes[$scopeLevel]["symbols"];
            $etiq = $this->getEtiquete($value);
            $currentScope[$name] = [
                "kind" => $kind,
                "type" => $type,
                "val"  => $value,
                "etiq" => $etiq
            ];

            $this->symbolTable[$scopeLevel][$name] = [
                "ScopeName" => $this->scopes[$scopeLevel]["name"],
                "n" => $this->syCount,
                "type"      => $type,
                "kind"      => $kind,
                "etiq"      => $etiq
            ];
        }

        return null;
    }


    public function visitDecl(DeclContext $context)
    {
        $ids  = $context->lid()->ID();
        $kind = $context->pre()->getText();
        $type = $this->visit($context->type());
        $value = $this->getDefaulValue($type);

        for ($i = 0; $i < count($ids); $i++) {

            $name = $ids[$i]->getText();

            if ($kind === "const") {
                $this->addError(
                    "No se puede usar esta declaracion para constantes",
                    $ids[$i]->getSymbol()
                );
                continue;
            }

            if (!$this->declare($name, []) && $this->inLoop === 0) {
                $this->addError(
                    "Identificador '$name' ya fue declarado en este scope",
                    $ids[$i]->getSymbol()
                );
                continue;
            }

            if ($this->declare($name, [])) {
                $this->syCount++;
            }
            $scopeLevel = count($this->scopes) - 1;
            $currentScope = &$this->scopes[$scopeLevel]["symbols"];
            $etiq = $this->getDefaultEtiquet($type);

            $currentScope[$name] = [
                "kind" => $kind,
                "type" => $type,
                "val"  => $value,
                "etiq" => $etiq
            ];

            $this->symbolTable[$scopeLevel][$name] = [
                "ScopeName" => $this->scopes[$scopeLevel]["name"],
                "n" => $this->syCount,
                "type"      => $type,
                "kind"      => $kind,
                "etiq"      => $etiq
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

        $scopeLevel = count($this->scopes) - 1;
        $currentScope = &$this->scopes[$scopeLevel]["symbols"];

        for ($i = 0; $i < count($ids); $i++) {

            $name  = $ids[$i]->getText();
            $value = $this->visit($vals[$i]);
            $type  = $this->getTypeFromValue($value);
            $etiq  = $this->getEtiquete($value);


            if (isset($currentScope[$name]) && $this->inLoop === 0) {
                $this->addError(
                    "Identificador '$name' ya fue declarado en este scope",
                    $ids[$i]->getSymbol()
                );
                continue;
            }


            if ($this->declare($name, [])) {
                $this->syCount++;
            }

            $currentScope[$name] = [
                "kind" => "var",
                "type"  => $type,
                "val"   => $value,
                "etiq"  => $etiq
            ];
            $this->symbolTable[$scopeLevel][$name] = [
                "ScopeName" => $this->scopes[$scopeLevel]["name"],
                "n" => $this->syCount,
                "type"      => $type,
                "kind"      => "var",
                "etiq"      => $etiq,
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
        if ($op == "+" && is_string($left) && is_string($right)) {
            return $left . $right;
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
