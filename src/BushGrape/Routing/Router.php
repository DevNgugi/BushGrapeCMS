<?php

namespace Devngugi\BushGrape\BushGrape\Routing;
use Exception;
class Router
{
    private array $routes=[];
    

    private static ?Router $instance = null;

    // Set the router instance
    public static function setInstance(Router $router): void {
        self::$instance = $router;
    }
    
    // Get the router instance
    public static function getInstance(): ?Router {
        return self::$instance;
    }

    public function addRoute(string $method, string $path, string $controller, string $action): self {
        $this->routes[strtoupper($method)][$path] = new Route($method, $path, $controller, $action);
        return $this;
    }

    public function getRoutes(): array {
        return $this->routes;
    }

    public function resolve(string $method, string $path): ?Route {
        return $this->routes[strtoupper($method)][$path] ?? null;
    }


    public function get(string $path, string $controller, string $action): self {
        return $this->addRoute('GET', $path, $controller, $action);
    }

    public function post(string $path, string $controller, string $action): self {
        return $this->addRoute('POST', $path, $controller, $action);
    }

    public function handle() {
        // Get the current URI and HTTP method
        $uri = $_SERVER['REQUEST_URI'];
        $method = $_SERVER['REQUEST_METHOD'];

        // Try to resolve the route
        $route = $this->resolve($method, $uri);

        if ($route) {
            // If route found, instantiate the controller
            $controllerClass = $route->controller;
            $action = $route->action;

            if (class_exists($controllerClass)) {
                $controller = new $controllerClass();
                if (method_exists($controller, $action)) {
                    // Call the action method on the controller
                    $controller->$action();
                } else {
                    echo "Action {$action} not found in {$controllerClass}.";
                }
            } else {
                echo "Controller {$controllerClass} not found.";
            }
        } else {
            // Handle 404 if route not found
            echo "404 Not Found";
        }
    }



}
