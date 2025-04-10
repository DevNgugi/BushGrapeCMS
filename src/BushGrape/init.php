<?php
define('ROOT_PATH', realpath(__DIR__ . '/../../'));
require_once __DIR__ . '/utils/parseBool.php';

use Devngugi\BushGrape\BushGrape\Database;
use Devngugi\BushGrape\BushGrape\Routing\Router;
use Dotenv\Dotenv;

$prod = parseBool($_ENV['PROD'] ?? 'false');

$dotenv = Dotenv::createImmutable(ROOT_PATH);
$dotenv->load();

$router = require_once __DIR__ . '/../routes.php';
Router::setInstance($router);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');


// Enable error reporting during development
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Catch uncaught exceptions
set_exception_handler(function ($exception) {
    // Custom error handling for uncaught exceptions
    http_response_code(500);

    $exceptionMessage = $exception->getMessage();
    $exceptionFile = $exception->getFile();
    $exceptionLine = $exception->getLine();
    $stackTrace = $exception->getTraceAsString();

    // Get additional request info
    $requestUri = $_SERVER['REQUEST_URI'];
    $requestMethod = $_SERVER['REQUEST_METHOD'];

    // Extract variables for use in the template
    extract([
        'exceptionMessage' => $exceptionMessage,
        'exceptionFile' => $exceptionFile,
        'exceptionLine' => $exceptionLine,
        'stackTrace' => $stackTrace,
        'requestUri' => $requestUri,
        'requestMethod' => $requestMethod
    ]);

    require_once __DIR__ . '/views/error.php';
});



$start = microtime(true);
Database::connection();
$time = microtime(true) - $start;
error_log("DB Connected in {$time} seconds");