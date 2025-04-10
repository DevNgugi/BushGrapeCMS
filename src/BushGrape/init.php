<?php

use Devngugi\BushGrape\BushGrape\Routing\Router;

$router = new Router();

// Register your routes
require_once __DIR__ . '/../routes.php';

// Store the router for later use (you can use a static property or a singleton)
Router::setInstance($router);