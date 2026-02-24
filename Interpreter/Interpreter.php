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
    private function isDuplicate(string $name): bool
    {
        return array_key_exists($name, $this->symbolTable);
    }



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



    public function visitDeclv(DeclvContext $context)
    {
        $ids  = $context->lid()->ID();
        $vals = $context->lval()->val();
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
        $vals = $context->lval()->val();

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
}
