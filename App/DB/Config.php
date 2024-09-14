<?php 

namespace App\DB;
use PDO;

class Config {

    private static $config;
    public static function initDB() {
        if (self::$config == null) { 
            try {
                $conn = new PDO("mysql:host=127.0.0.1;dbname=oop_training", "root", "root");
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$config = $conn;

            } catch (\Throwable $th) {
                exit("Error connecting to database mysql ". $th->getMessage());
            }
        }
        return self::$config;
    }
}