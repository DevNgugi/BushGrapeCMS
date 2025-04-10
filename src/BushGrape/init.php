<?php
define('ROOT_PATH', realpath(__DIR__ . '/../../'));
require_once __DIR__ . '/utils/parseBool.php';
require_once __DIR__ . '/config/error.php';

use Devngugi\BushGrape\BushGrape\Routing\Router;
use Dotenv\Dotenv;

// load .env file variables globally
$dotenv = Dotenv::createImmutable(ROOT_PATH);
$dotenv->load();

// register routes
$router = require_once __DIR__ . '/../routes.php';
Router::setInstance($router);