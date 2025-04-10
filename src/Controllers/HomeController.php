<?php

namespace Devngugi\BushGrape\Controllers;
use Devngugi\BushGrape\Framework\Response;

class HomeController {
    public function index() 
     
        {
            Response::Json([],400);
        }

    public function post(){
        Response::Json([],200);
    }
    
}