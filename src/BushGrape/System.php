<?php
namespace Devngugi\BushGrape\BushGrape;

use Devngugi\BushGrape\BushGrape\Routing\Router;

class System {

    public function __construct() {
        // Constructor can be empty if everything is done during bootstrap
    }

    // Handle the request
    public function handleRequest() {
        $router = Router::getInstance();

        if (!$router) {
            echo "Router not initialized.";
            return;
        }

        $router->handle(); // This handles the request and calls the right controller
    }

}
