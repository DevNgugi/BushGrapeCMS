<?php

namespace Devngugi\BushGrape\Controllers;
use Devngugi\BushGrape\BushGrape\Response;

class HomeController {
    public function index() 
     
        {
            Response::Json(['get method resolved'],200);
        }

    public function post(){
        Response::Json(['Post method resolved'],200);
    }
    
}