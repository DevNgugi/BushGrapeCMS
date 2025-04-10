<?php

use Devngugi\BushGrape\Framework\System;


require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ .'/../src/Framework/init.php';


// initialize the system
$system = new System;

$system->handleRequest();




