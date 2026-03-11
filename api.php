<?php

error_reporting(E_ALL);
ini_set('display_errors', 0);

require __DIR__ . "/vendor/autoload.php";
require_once __DIR__ . "/bootstrap.php";

use Antlr\Antlr4\Runtime\InputStream;
use Antlr\Antlr4\Runtime\CommonTokenStream;


header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");


if ($_SERVER["REQUEST_METHOD"] === "OPTIONS") {
    http_response_code(204);
    exit;
}

$method = $_SERVER["REQUEST_METHOD"];
$path   = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$path   = rtrim($path, "/");

if ($method !== "POST" || $path !== "/interpreter") {
    http_response_code(404);
    echo json_encode(["error" => "Ruta no encontrada. Usa GET /interpreter"]);
    exit;
}


$body = file_get_contents("php://input");
$data = json_decode($body, true);

$input = $data["input"] ?? "";


try {
    $interpreter  = new Interpreter();
    $stream       = InputStream::fromString($input);
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

    http_response_code(200);
    echo json_encode([
        "symbolTable" => $interpreter->symbolTable ?? [],
        "console"     => $interpreter->console     ?? "",
        "errorTable"  => $interpreter->errorTable  ?? [],
    ], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
} catch (Throwable $e) {
    http_response_code(500);
    echo json_encode([
        "error"   => "Error interno del intérprete.",
        "message" => $e->getMessage(),
    ]);
}
