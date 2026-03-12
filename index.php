<!DOCTYPE html>
<html>

<head>
    <title>Proyecto</title>
</head>

<body>

    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    require __DIR__ . "/vendor/autoload.php";
    require_once "bootstrap.php";

    use Antlr\Antlr4\Runtime\InputStream;
    use Antlr\Antlr4\Runtime\CommonTokenStream;

    require_once __DIR__ . "/Interpreter/Interpreter.php";

    $input = "";
    $output = "";

    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $input = $_POST["input"] ?? "";

        if (!empty($input)) {

            try {
                $interpreter = new Interpreter();
                $stream = InputStream::fromString($input);
                $errorListener = new ErrorListener($interpreter);

                $lexer = new GrammarLexer($stream);
                $lexer->removeErrorListeners();
                $lexer->addErrorListener($errorListener);

                $tokens = new CommonTokenStream($lexer);

                $parser = new GrammarParser($tokens);
                $parser->removeErrorListeners();
                $parser->addErrorListener($errorListener);

                $tree = $parser->s();


                $interpreter->visit($tree);


                $output .= "<h3>Scopes</h3>";
                $output .= "<pre>" . print_r($interpreter->symbolTable ?? [], true) . "</pre>";
                $output .= "<h3>Consola</h3>";
                $output .= "<pre>" . $interpreter->console . "</pre>";

                if (!empty($interpreter->errorTable)) {
                    $output .= "<h3>Errores</h3><pre>" .
                        print_r($interpreter->errorTable, true) .
                        "</pre>";
                }
            } catch (Throwable $e) {
                $output = "<pre>Error: " . $e->getMessage() . "</pre>";
            }
        }
    }
    ?>

    <div>
        <h2>Entrada</h2>
        <form method="post">
            <textarea name="input" cols="60" rows="15"
                placeholder="Escribe aqui"><?= htmlspecialchars($_POST["input"] ?? "") ?></textarea>
            <br><br>
            <input type="submit" value="Correr">
        </form>
    </div>

    <div>
        <h2>Salida</h2>
        <?= $output ?>
    </div>

</body>

</html>