<?php

namespace Devngugi\BushGrape\Controllers;

use Devngugi\BushGrape\BushGrape\Helpers\JsonResponse;


class HomeController {
    public function index() {
        {
            $data = [
                ['id' => 1, 'name' => 'Alice'],
                ['id' => 2, 'name' => 'Bob']
            ];
            JsonResponse::success($data);
        }
    }
}