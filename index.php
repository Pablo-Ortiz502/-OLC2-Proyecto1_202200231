<!DOCTYPE html>
<html>

<head>
    <title>Proyecto</title>
</head>

<body>

    <?php
    require __DIR__ . "/vendor/autoload.php";
    require_once "bootstrap.php";

    use Antlr\Antlr4\Runtime\InputStream;
    use Antlr\Antlr4\Runtime\CommonTokenStream;

    $input = "";
    $output = "";

    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $input = $_POST["input"] ?? "";

        if (!empty($input)) {

            try {
                $stream = InputStream::fromString($input);

                $lexer = new GrammarLexer($stream);
                $tokens = new CommonTokenStream($lexer);
                $parser = new GrammarParser($tokens);

                // Crear árbol sintáctico
                $tree = $parser->s();

                // Ejecutar intérprete
                $interpreter = new Interpreter();
                $interpreter->visit($tree);

                // Mostrar tabla de símbolos (opcional)
                $output = "<pre>" . print_r($interpreter->symbolTable, true) . "</pre>";

                // Mostrar errores si existen
                if (!empty($interpreter->errorTable)) {
                    $output .= "<h3>Errores</h3><pre>" .
                        print_r($interpreter->errorTable, true) .
                        "</pre>";
                }
            } catch (Exception $e) {
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