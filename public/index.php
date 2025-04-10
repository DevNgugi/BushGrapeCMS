<?php

use Devngugi\BushGrape\BushGrape\System;


require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ .'/../src/BushGrape/init.php';


// initialize the system
$system = new System;

$system->handleRequest();




