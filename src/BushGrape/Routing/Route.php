<?php

namespace Devngugi\BushGrape\BushGrape\Routing;


class Route {
    public string $method;
    public string $path;
    public string $controller;
    public string $action;

    public function __construct(string $method, string $path, string $controller, string $action) {
        $this->method = strtoupper($method);
        $this->path = $path;
        $this->controller = $controller;
        $this->action = $action;
    }
}
