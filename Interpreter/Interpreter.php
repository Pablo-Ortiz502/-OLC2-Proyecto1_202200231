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
use Context\ArrayAsigContext;
use Context\ArrayElementContext;
use Context\ArrayValContext;
use Context\ArrayValueContext;
use Context\EqNotEqContext;
use Context\MoreLessEqContext;
use Context\ProgramContext;
use Context\BlockContext;
use Context\FunArrayTypeContext;
use Context\FuncArrayDecContext;
use Context\FuncParamDecContext;
use Context\FunReturnContext;
use Context\IncDecContext;
use Context\LongForContext;
use Context\InstContext;
use Context\MidForContext;
use Context\ShortForContext;
use Context\PrintlnContext;
use Context\TypeOContext;
use Context\NowFuncContext;
use Context\LenFuncContext;
use Context\LongArrayDecContext;
use Context\MethodContext;
use Context\MultFuncContext;
use Context\ParContext;
use Context\ReturnStmtContext;
use Context\ShortArrayDecContext;
use Context\SimpleFuncContext;
use Context\SubSContext;
use Context\SwitchStmtContext;

use function PHPSTORM_META\type;

class BreakException extends \Exception {}
class ContinueException extends \Exception {}
class ReturnException extends \Exception
{
    public $value;

    public function __construct($value)
    {
        $this->value = $value;
    }
}

class Interpreter extends GrammarBaseVisitor
{
    public array $errorTable = [];
    public string $console = "";
    public array $symbolTable = [];

    private array $scopes = [];
    private int $inLoop = 0;
    private int $inFunc = 0;
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
            "array"   => is_array($value),
            default   => false
        };
    }

    public function addError(string $desc, $token, string $type = "Semantico"): void
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

        if (is_array("array")) {
            return "array";
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

        if (is_array($value)) {
            return $this->arrayToString($value);
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
                return '" "';
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

    private function arrayToString($arr)
    {
        if (!is_array($arr)) {
            return $arr;
        }

        $parts = [];

        foreach ($arr as $value) {
            $parts[] =  $this->arrayToString($value);
        }

        return '{' . implode(',', $parts) . '}';
    }

    private function validateArray($type, $arr)
    {
        if (!is_array($arr)) {
            return $this->validateType($type, $arr);
        }

        foreach ($arr as $value) {
            if (is_array($value)) {
                if (!$this->validateArray($type, $value)) {
                    return false;
                }
            } else {
                if (!$this->validateType($type, $value)) {
                    return false;
                }
            }
        }

        return true;
    }

    private function generateArray($dimensions, $type)
    {
        if (count($dimensions) === 0) {
            return $this->getDefaulValue($type);
        }

        $size = array_shift($dimensions);
        $result = [];

        for ($i = 0; $i < $size; $i++) {
            $result[] = $this->generateArray($dimensions, $type);
        }

        return $result;
    }



    //-------funciones visit-------------------------------------------------------
    public function visitS(SContext $context)
    {
        $this->enterScope("Global");
        $f0 = $context->functiondec(0);
        $f1 = $context->functiondec(1);

        if ($f0 !== null && is_array($f0)) {
            for ($i = 0; $i < count($f0); $i++) {
                $this->visit($f0[$i]);
            }
        } else if ($f0 !== null) {
            $this->visit($f0);
        }
        if ($f1 !== null && is_array($f1)) {
            for ($i = 0; $i < count($f1); $i++) {
                $this->visit($f1[$i]);
            }
        } else if ($f1 !== null) {
            $this->visit($f1);
        }

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

    //----------------------------funciones nativas---------------------

    public function visitPrintln(PrintlnContext $context)
    {
        $result = null;
        $vals = $context->lval()->expr();
        if ($context->lval() === null) {
            $this->addError(
                "debe agragar un valor a la funcion fmt.Println()",
                $context->lval()->getStart()
            );
            return null;
        }

        for ($i = 0; $i < count($vals); $i++) {
            $result = $this->visit($vals[$i]);
            if (is_array($result)) {
                $result = $this->arrayToString($result);
            }
            $this->console .= " " . $result;
        }
        $this->console .= "\n";
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

    public function visitLenFunc(LenFuncContext $context)
    {
        $result = $this->visit($context->expr());

        if (is_string($result)) {
            return strlen($result);
        }
        if (is_array($result)) {
            return count($result);
        }
        $this->addError(
            "len() solo acepta strings o arrays",
            $context->expr()->getStart()
        );
        return null;
    }

    public function visitSubS(SubSContext $context)
    {
        $str = $this->visit($context->expr(0));
        $start = $this->visit($context->expr(1));
        $long =  $this->visit($context->expr(2));

        if (!is_string($str)) {
            $this->addError(
                "La la cadena debe ser String",
                $context->expr(0)->getStart()
            );
            return null;
        }
        $max = strlen($str);

        if (!is_int($start) || !is_int($long)) {
            $this->addError(
                "La substr() solo hacepta indices tipo Int32",
                $context->expr(0)->getStart()
            );
            return null;
        }
        if ($start < 0 || $long < 1) {
            $this->addError(
                "Indices fuera de rango",
                $context->expr(0)->getStart()
            );
            return null;
        }

        if ($max < $start + $long) {
            $this->addError(
                "Indice fuera del limite",
                $context->expr(0)->getStart()
            );
            return null;
        }

        return substr($str, $start, $long);
    }



    //----------------------------switch----------------------------------
    public function visitSwitchStmt(SwitchStmtContext $context)
    {
        $condition = $this->visit($context->expr());
        $caluses = $context->caseClause();
        $def = $context->defaultClause();

        for ($i = 0; $i < count($caluses); $i++) {
            $cases = $caluses[$i]->lval()->expr();

            for ($x = 0; $x < count($cases); $x++) {

                $case = $this->visit($cases[$x]);
                if ($case === $condition) {

                    $this->visit($caluses[$i]->stmts());
                    return null;
                }
            }
        }

        if ($def) {
            $this->visit($def->stmts());
            return null;
        }

        return null;
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

        $this->symbolTable[$scopeLevel][$name]["val"] = $value;
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

        $this->symbolTable[$scopeLevel][$name]["val"] = $symbol["val"];
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
        $this->symbolTable[$scopeLevel][$name]["val"] = $v;
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
        $this->symbolTable[$scopeLevel][$name]["val"] = $v;
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
        $this->symbolTable[$scopeLevel][$name]["val"] = $v;
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
        $this->symbolTable[$scopeLevel][$name]["val"] = $v;
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
                "val"       => $value,
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
                "val"       => $value,
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
                "val"       => $value,
                "etiq"      => $etiq,
            ];
        }

        return null;
    }


    //------------------------arrays-----------------------------------

    function getArrayValue(array $arr, array $indexes)
    {
        $valor = $arr;

        foreach ($indexes as $index) {
            $valor = $valor[$index];
        }

        return $valor;
    }
    function setArrayVAlue(array &$arr, array $indices, $valor)
    {
        $ref = &$arr;

        foreach ($indices as $i => $indice) {
            if (!is_array($ref) || !array_key_exists($indice, $ref)) {
                throw new Exception("Índice fuera de rango: $indice");
            }

            if ($i === count($indices) - 1) {
                $ref[$indice] = $valor;
            } else {
                $ref = &$ref[$indice];
            }
        }
    }

    public function visitArrayValue(ArrayValueContext $context)
    {
        $result = [];

        if ($context->arrayElements() === null) {
            return $result;
        }

        foreach ($context->arrayElements()->arrayElement() as $element) {
            $result[] = $this->visit($element);
        }

        return $result;
    }

    public function visitArrayElement(ArrayElementContext $context)
    {
        if ($context->expr() !== null) {
            return $this->visit($context->expr());
        }

        if ($context->arrayValue() !== null) {
            return $this->visit($context->arrayValue());
        }

        return null;
    }

    public function visitLongArrayDec(LongArrayDecContext $context)
    {
        $name = $context->ID()->getText();
        $type1 = $this->visit($context->type(0));
        $type2 = $this->visit($context->type(1));
        $value = $this->visit($context->arrayValue());
        $leftDims = $context->larray(0)->NUM();
        $rightDims = $context->larray(1)->NUM();

        if (!$this->declare($name, []) && $this->inLoop === 0) {
            $this->addError(
                "Identificador '$name' ya fue declarado en este scope",
                $context->ID()->getSymbol()
            );
            return null;
        }


        if (count($leftDims) !== count($rightDims)) {
            $this->addError(
                "Los valores Dimensionales no coinciden",
                $rightDims = $context->larray(1)->getStart()
            );
            return null;
        }


        if (!$this->validateArray($type1, $value)) {
            $this->addError(
                "Error al guardar en array, tipos incomplatibles",
                $rightDims = $context->arrayValue()->getStart()
            );
            return null;
        }

        for ($i = 0; $i < count($leftDims); $i++) {
            if ($leftDims[$i]->getText() !== $rightDims[$i]->getText()) {
                $this->addError(
                    "Los valores Dimensionales no coinciden",
                    $rightDims = $context->larray(1)->getStart()
                );
                return null;
            }
        }


        if ($type1 !== $type2) {
            $this->addError(
                "Los valores Dimensionales no coinciden",
                $rightDims = $context->type(1)->getStart()
            );
            return null;
        }

        if (isset($currentScope[$name]) && $this->inLoop === 0) {
            $this->addError(
                "Identificador '$name' ya fue declarado en este scope",
                $context->ID()->getSymbol()
            );
            return null;
        }

        if ($this->declare($name, [])) {
            $this->syCount++;
        }

        $temp = [];
        for ($i = 0; $i < count($leftDims); $i++) {
            $temp[] = $leftDims[$i]->gettext(0);
        }


        $scopeLevel = count($this->scopes) - 1;
        $currentScope = &$this->scopes[$scopeLevel]["symbols"];
        $currentScope[$name] = [
            "kind" => "var",
            "type"  => $type1,
            "val"   => $value,
            "dimen" => $temp,
            "etiq"  => "array"
        ];

        $this->symbolTable[$scopeLevel][$name] = [
            "ScopeName" => $this->scopes[$scopeLevel]["name"],
            "n" => $this->syCount,
            "type"      => "array " . $type1,
            "kind"      => "var",
            "val"       => $value,
            "etiq"      => $this->arrayToString($value)
        ];
    }

    public function visitShortArrayDec(ShortArrayDecContext $context)
    {
        $name = $context->ID()->getText();
        $type = $this->visit($context->type());
        $leftDims = $context->larray()->NUM();



        if (!$this->declare($name, []) && $this->inLoop === 0) {
            $this->addError(
                "Identificador '$name' ya fue declarado en este scope",
                $context->ID()->getSymbol()
            );
            return null;
        }



        if ($this->declare($name, [])) {
            $this->syCount++;
        }

        $temp = [];
        for ($i = 0; $i < count($leftDims); $i++) {
            $temp[] = $leftDims[$i]->gettext(0);
        }

        $value =  $this->generateArray($temp, $type);


        $scopeLevel = count($this->scopes) - 1;
        $currentScope = &$this->scopes[$scopeLevel]["symbols"];
        $currentScope[$name] = [
            "kind" => "var",
            "type"  => $type,
            "val"   => $value,
            "dimen" => $temp,
            "etiq"  => "array"
        ];


        $this->symbolTable[$scopeLevel][$name] = [
            "ScopeName" => $this->scopes[$scopeLevel]["name"],
            "n" => $this->syCount,
            "type"      => "array " . $type,
            "kind"      => "var",
            "val"       => $value,
            "etiq"      => $this->arrayToString($value)
        ];
    }

    public function visitArrayVal(ArrayValContext $context)
    {
        $name = $context->ID()->getText();
        $dim = $context->larrayexp()->expr();
        $symbol = &$this->resolveRef($name);

        if ($symbol === null) {
            $this->addError(
                "La variable '$name' no ha sido declarada",
                $context->ID()->getSymbol()
            );
            return null;
        }
        $n = count($symbol["dimen"]);
        $values = $symbol["val"];

        $temp = [];
        for ($i = 0; $i < count($dim); $i++) {
            $v = $this->visit($dim[$i]);
            if (!is_int($v)) {
                $this->addError(
                    "Las dimensiones deben ser numeros enteros",
                    $dim[$i]->getStart()
                );
                return null;
            }
            $temp[] = $v;
        }


        if ($n !== count($temp)) {
            $this->addError(
                "El array '$name' nececita '$n' dimensiones",
                $context->ID()->getSymbol()
            );
            return null;
        }

        for ($i = 0; $i < $n; $i++) {
            if ($temp[$i] >= $symbol["dimen"][$i]) {
                $this->addError(
                    "Indices fuera de limites del array '$name'",
                    $context->ID()->getSymbol()
                );
                return null;
            }
        }
        $result = $this->getArrayValue($values, $temp);

        return $result;
    }

    public function visitArrayAsig(ArrayAsigContext $context)
    {
        $name = $context->ID()->getText();
        $dim = $context->larrayexp()->expr();
        $symbol = &$this->resolveRef($name);

        if ($symbol === null) {
            $this->addError(
                "La variable '$name' no ha sido declarada",
                $context->ID()->getSymbol()
            );
            return null;
        }
        $n = count($symbol["dimen"]);

        $temp = [];
        for ($i = 0; $i < count($dim); $i++) {
            $v = $this->visit($dim[$i]);
            if (!is_int($v)) {
                $this->addError(
                    "Las dimensiones deben ser numeros enteros",
                    $dim[$i]->getStart()
                );
                return null;
            }
            $temp[] = $v;
        }

        if ($n !== count($temp)) {
            $this->addError(
                "El array '$name' nececita '$n' dimensiones",
                $context->ID()->getSymbol()
            );
            return null;
        }

        for ($i = 0; $i < $n; $i++) {
            if ($temp[$i] >= $symbol["dimen"][$i]) {
                $this->addError(
                    "Indices fuera de limites del array '$name'",
                    $context->ID()->getSymbol()
                );
                return null;
            }
        }


        $val = $this->visit($context->expr());
        $type = $symbol["type"];
        if (!$this->validateType($type, $val)) {
            $this->addError(
                "Asifnacion de tipos incompatibles en '$name'",
                $context->expr()->getStart()
            );
            return null;
        }

        $this->setArrayValue($symbol["val"], $temp, $val);

        $scopeLevel = $this->getCurrentScopeLevelOf($name);
        $this->symbolTable[$scopeLevel][$name]["val"] = $symbol["val"];
        $this->symbolTable[$scopeLevel][$name]["etiq"] = $this->arrayToString($symbol["val"]);
    }



    //------------------------funciones------------------------------


    public function visitReturnStmt(ReturnStmtContext $context)
    {
        $val = $context->expr();
        if ($context->expr() !== null) {
            $val = $this->visit($val);
        }

        throw new ReturnException($val);
    }

    public function visitFuncParamDec(FuncParamDecContext $context)
    {
        $ids  = $context->lid()->ID();
        $type = $this->visit($context->type());
        $value = $this->getDefaulValue($type);
        for ($i = 0; $i < count($ids); $i++) {

            $name = $ids[$i]->getText();

            if (!$this->declare($name, []) && $this->inLoop === 0) {
                $this->addError(
                    "Identificador '$name' ya fue declarado en este scope",
                    $ids[$i]->getSymbol()
                );
                return null;
            }

            if ($this->declare($name, [])) {
                $this->syCount++;
            }

            $scopeLevel = count($this->scopes) - 1;
            $currentScope = &$this->scopes[$scopeLevel]["symbols"];
            $etiq = $this->getDefaultEtiquet($type);

            $currentScope[$name] = [
                "kind" => "var",
                "type" => $type,
                "val"  => $value,
                "etiq" => $etiq
            ];

            $this->symbolTable[$scopeLevel][$name] = [
                "ScopeName" => $this->scopes[$scopeLevel]["name"],
                "n" => $this->syCount,
                "type"      => $type,
                "kind"      => "var",
                "val"       => $value,
                "etiq"      => $etiq
            ];
        }

        return null;
    }


    public function visitFuncArrayDec(FuncArrayDecContext $context)
    {
        $name = $context->ID()->getText();
        $type = $this->visit($context->type());
        $leftDims = $context->larray()->NUM();

        if (!$this->declare($name, [])) {
            $this->addError(
                "La funcion '$name' ya fue declarada",
                $context->ID()->getSymbol()
            );
            return null;
        } else {
            $this->syCount++;
        }

        $temp = [];
        for ($i = 0; $i < count($leftDims); $i++) {
            $temp[] = $leftDims[$i]->gettext(0);
        }

        $value =  $this->generateArray($temp, $type);


        $scopeLevel = count($this->scopes) - 1;
        $currentScope = &$this->scopes[$scopeLevel]["symbols"];
        $currentScope[$name] = [
            "kind" => "Func",
            "type"  => $type,
            "val"   => $value,
            "dimen" => $temp,
        ];


        $this->symbolTable[$scopeLevel][$name] = [
            "ScopeName" => $this->scopes[$scopeLevel]["name"],
            "n" => $this->syCount,
            "type"      => "array " . $type,
            "kind"      => "var",
            "val"       => $value,
            "etiq"      => $this->arrayToString($value)
        ];
    }

    public function visitMethod(MethodContext $context)
    {
        $scopeLevel = count($this->scopes) - 1;
        if ($scopeLevel !== 0) {
            $this->addError(
                "No se pueden declarar funciones dentro del main",
                $context->ID()->getSymbol()
            );
            return null;
        }


        $name = $context->ID()->getText();
        if (!$this->declare($name . "function", [])) {
            $this->addError(
                "La funcion '$name' ya fue declarada",
                $context->ID()->getSymbol()
            );
            return null;
        } else {
            $this->syCount++;
        }

        $params = null;
        if ($context->paramlist()) {
            $params = $context->paramlist()->param();
        }
        $block = $context->block();

        $scopeLevel = count($this->scopes) - 1;
        $currentScope = &$this->scopes[0]["symbols"];

        $currentScope[$name . "function"] = [
            "kind" => "Func",
            "type"  => null,
            "val"   => $block,
            "dimen" => null,
            "params" => $params,
        ];

        $this->symbolTable[$scopeLevel][$name] = [
            "ScopeName" => $this->scopes[$scopeLevel]["name"],
            "n" => $this->syCount,
            "type"      => 'Metodo',
            "kind"      => "funcion",
            "val"       => "sentencias",
            "etiq"      => 'funciones'
        ];
    }

    public function visitFunArrayType(FunArrayTypeContext $context)
    {
        $vals = $context->larray()->NUM();
        $temp = [];
        $type = $this->visit($context->type());
        for ($i = 0; $i < count($vals); $i++) {
            $temp[$i] = $vals[$i]->getText();
        }
        return [$temp, $type];
    }


    public function visitSimpleFunc(SimpleFuncContext $context)
    {

        $scopeLevel = count($this->scopes) - 1;
        if ($scopeLevel !== 0) {
            $this->addError(
                "No se pueden declarar funciones dentro del main",
                $context->ID()->getSymbol()
            );
            return null;
        }
        $name = $context->ID()->getText();
        if (!$this->declare($name . "function", [])) {
            $this->addError(
                "La funcion '$name' ya fue declarada",
                $context->ID()->getSymbol()
            );
            return null;
        } else {
            $this->syCount++;
        }

        $params = null;
        if ($context->paramlist()) {
            $params = $context->paramlist()->param();
        }
        $block = $context->block();

        $type = $this->visit($context->type());
        $etiq = $type;
        $dimen = null;

        if (is_array($type)) {
            $etiq = $type[1] . " " . $this->arrayToString($type[0]);
            $dimen = $type[0];
        }


        $currentScope = &$this->scopes[0]["symbols"];

        $currentScope[$name . "function"] = [
            "kind" => "Func",
            "type"  => "funcion",
            "val"   => $block,
            "dimen" => $dimen,
            "params" => $params,
        ];

        $this->symbolTable[0][$name] = [
            "ScopeName" => $this->scopes[0]["name"],
            "n" => $this->syCount,
            "type"      => $etiq,
            "kind"      => "funcion",
            "val"       => "sentencias",
            "etiq"      => 'funciones'
        ];
    }

    public function visitMultFunc(MultFuncContext $context)
    {
        $scopeLevel = count($this->scopes) - 1;
        if ($scopeLevel !== 0) {
            $this->addError(
                "No se pueden declarar funciones dentro del main",
                $context->ID()->getSymbol()
            );
            return null;
        }

        $name = $context->ID()->getText();
        if (!$this->declare($name . "function", [])) {
            $this->addError(
                "La funcion '$name' ya fue declarada",
                $context->ID()->getSymbol()
            );
            return null;
        } else {
            $this->syCount++;
        }

        $params = null;
        if ($context->paramlist()) {
            $params = $context->paramlist()->param();
        }
        $block = $context->block();

        $types = $context->typelist()->type();
        $type  = [];
        $dimen = [];
        for ($i = 0; $i < count($types); $i++) {
            $t = $this->visit(($types[$i]));
            if (is_array($t)) {
                $t = $t[1] . " " . $this->arrayToString($t[0]);
                $dimen[] = $t[0];
            }
            $type[$i] = $t;
        }

        if (count($dimen) === 0) {
            $dimen = null;
        }

        $etiq = $this->arrayToString($type);

        $currentScope = &$this->scopes[0]["symbols"];

        $currentScope[$name . "function"] = [
            "kind" => "Func",
            "type"  => "funcion",
            "val"   => $block,
            "dimen" => $dimen,
            "params" => $params,
        ];

        $this->symbolTable[0][$name] = [
            "ScopeName" => $this->scopes[0]["name"],
            "n" => $this->syCount,
            "type"      => $etiq,
            "kind"      => "Multifuncion",
            "val"       => "sentencias",
            "etiq"      => 'funciones'
        ];
    }

    public function visitFunReturn(FunReturnContext $context)
    {
        $name = $context->ID()->getText();
        $function = &$this->resolveRef($name . "function");
        if ($function === null) {
            $this->addError(
                "La funcion '$name' No ha sido declarada",
                $context->ID()->getSymbol()
            );
            return null;
        }

        $vals = null;
        if ($context->lvalpar() !== null) {
            $vals = $context->lvalpar()->par(); // viene de la llamada
        }
        $params = $function["params"];

        if (($params === null && $vals !== null)) {
            $this->addError(
                "En la funcion '$name' no tiene parametros",
                $context->ID()->getSymbol()
            );
            return null;
        }
        if (($params !== null && $vals === null)) {
            $this->addError(
                "En la funcion '$name' nececita parametros",
                $context->ID()->getSymbol()
            );
            return null;
        }


        if ($params !== null && $vals !== null) {
            if (count($params) !== count($vals)) {
                $this->addError(
                    "En la funcion '$name' no coinciden el numero de parametros",
                    $context->ID()->getSymbol()
                );
                return null;
            }

            $temp = [];
            for ($i = 0; $i < count($vals); $i++) {

                $ref = $vals[$i]->ref;

                if ($ref !== null) {
                    $name = $vals[$i]->ID()->getText();
                    $symbol = &$this->resolveRef($name);
                    $temp[] = [
                        "val" => &$symbol["val"],
                        "ref" => true
                    ];
                } else {
                    $temp[] = [
                        "val" => $this->visit($vals[$i]),
                        "ref" => false
                    ];
                }
            }

            $this->enterScope($name . "func");
            $scopeLevel = count($this->scopes) - 1;
            $currentScope = &$this->scopes[$scopeLevel]["symbols"];


            for ($i = 0; $i < count($params); $i++) {
                $this->visit($params[$i]);
            }

            $k = 0;

            foreach ($currentScope as &$Symbol) {
                if (!$this->validateType($Symbol["type"], $temp[$k]["val"])) {
                    $this->addError(
                        "Tipo incompatible en '$name'",
                        $context->ID()->getSymbol()
                    );
                    $this->exitScope();
                    return null;
                }

                if ($temp[$k]["ref"]) {
                    $Symbol["val"] = &$temp[$k]["val"];
                } else {
                    $Symbol["val"] = $temp[$k]["val"];
                }
                $Symbol["etiq"] = $this->getEtiquete($Symbol["val"]);

                $k++;
            }

            $k = 0;
            foreach ($this->symbolTable[$scopeLevel] as &$symbol) {
                $symbol["val"]  = $temp[$k]["val"];
                $symbol["etiq"] = $this->getEtiquete($temp[$k]["val"]);
                $k++;
            }
            try {
                $this->visit($function["val"]);
                foreach ($this->symbolTable as &$scope) {
                    foreach ($scope as $name => &$symbol) {
                        $var = &$this->resolveRef($name);
                        if ($var !== null) {
                            $val = $var["val"];
                            $symbol["val"] = $val;
                            $symbol["etiq"] = $this->getEtiquete($val);
                        }
                    }
                }
            } catch (ReturnException $e) {
                return $e->value;
            } finally {
                $this->exitScope();
            }
        } else {
            try {
                $this->visit($function["val"]);
                foreach ($this->symbolTable as &$scope) {
                    foreach ($scope as $name => &$symbol) {
                        $var = &$this->resolveRef($name);
                        if ($var !== null) {
                            $val = $var["val"];
                            $symbol["val"] = $val;
                            $symbol["etiq"] = $this->getEtiquete($val);
                        }
                    }
                }
            } catch (ReturnException $e) {
                return $e->value;
            } finally {
                $this->exitScope();
            }
        }
    }

    public function visitPar(ParContext $context)
    {
        $name = $context->ID();

        if ($name !== null) {
            $name = $name->getText();
            $symbol = $this->resolveRef($name);
            return $symbol["val"];
        }

        if ($context->expr() !== null) {
            return $this->visit($context->expr());
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
