<?php

use Devngugi\WildGrape\Framework\Routing\Router;
use Devngugi\WildGrape\Controllers\HomeController;

$router = new Router();

$router->addRoute('GET','/',HomeController::class,'index');
$router->addRoute('POST','/',HomeController::class,'post');

return $router;