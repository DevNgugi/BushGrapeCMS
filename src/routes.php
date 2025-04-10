<?php

use Devngugi\BushGrape\Framework\Routing\Router;
use Devngugi\BushGrape\Controllers\HomeController;

$router = new Router();

$router->addRoute('GET','/',HomeController::class,'index');
$router->addRoute('POST','/',HomeController::class,'post');

return $router;