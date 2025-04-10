<?php

namespace Devngugi\BushGrape\BushGrape\Helpers;

class JsonResponse
{
    public static function send(array $data = [], int $statusCode = 200): void
    {
        http_response_code($statusCode);
        header('Content-Type: application/json');
        echo json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        exit; // optional, stops execution after sending response
    }

    public static function success(array $data = [], string $message = 'Success'): void
    {
        self::send([
            'status' => 'success',
            'message' => $message,
            'data' => $data
        ], 200);
    }

    public static function error(string $message = 'An error occurred', int $statusCode = 400): void
    {
        self::send([
            'status' => 'error',
            'message' => $message
        ], $statusCode);
    }
}
