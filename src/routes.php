<?php

use Devngugi\BushGrape\BushGrape\Routing\Router;
use Devngugi\BushGrape\Controllers\HomeController;

$router = new Router();

return $router
    ->get('/', HomeController::class, 'index')
    ->post('/', HomeController::class, 'index');
