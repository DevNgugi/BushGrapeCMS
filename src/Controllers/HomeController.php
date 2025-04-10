<?php

namespace Devngugi\WildGrape\Controllers;
use Devngugi\WildGrape\Framework\Response;

class HomeController {
    public function index() 
     
        {
            Response::Json([],400);
        }

    public function post(){
        Response::Json([],200);
    }
    
}