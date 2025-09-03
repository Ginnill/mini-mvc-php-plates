<?php
namespace app\database;

use PDO;

class Connection{
    private static $connection = null;

    public static function getConnection(){
        if (empty(self::$connection)) {
            self::$connection = new PDO("mysql:host=localhost;dbname=works", "root", "", [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
            ]);
        }

        return self::$connection;
    }
}