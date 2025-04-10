<?php

namespace Devngugi\BushGrape\Framework;

use Exception;
use PDO;
use PDOException;

class Database
{
    private static ?PDO $connection = null;

    private function __construct() {} // Prevent instantiation

    public static function connection(): PDO
    {
        if (self::$connection === null) {
            try {
                $dsn = 'mysql:host=' . $_ENV['DB_HOST'] . 
                       ';port=' . $_ENV['DB_PORT'] . 
                       ';dbname=' . $_ENV['DB_DATABASE'] . 
                       ';charset=utf8mb4';

                self::$connection = new PDO(
                    $dsn,
                    $_ENV['DB_USERNAME'],
                    $_ENV['DB_PASSWORD'],
                    [
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                        PDO::ATTR_PERSISTENT => false,
                    ]
                );
            } catch (PDOException $e) {
                throw new Exception("Database connection failed: " . $e->getMessage());
            }
        }

        return self::$connection;
    }
}
