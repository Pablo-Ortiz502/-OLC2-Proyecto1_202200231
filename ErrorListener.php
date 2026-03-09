<?php

use Antlr\Antlr4\Runtime\Error\Listeners\BaseErrorListener;

class ErrorListener extends BaseErrorListener
{
    private $interpreter;

    public function __construct($interpreter)
    {
        $this->interpreter = $interpreter;
    }

    public function syntaxError(
        $recognizer,
        $offendingSymbol,
        $line,
        $charPositionInLine,
        $msg,
        $e
    ): void {

        if ($offendingSymbol !== null) {
            $this->interpreter->addError(
                $msg,
                $offendingSymbol,
                "Sintactico"
            );
        }
    }
}
