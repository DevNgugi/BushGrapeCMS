<?php

namespace Devngugi\BushGrape\BushGrape;

class Response
{

    public static function send(array $data = [], int $statusCode = 200): void
    {
        http_response_code($statusCode);
        header('Content-Type: application/json');
        echo json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        exit; 
    }

    public static function Json(array $data , int $statusCode): void
    {
        self::send([
            'data' => $data
        ], $statusCode);
    }
}
