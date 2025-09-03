<?php

use app\database\Connection;

require "../vendor/autoload.php";
require "../routes/router.php";

try {
    $uri = parse_url($_SERVER["REQUEST_URI"])['path'];
    $request = $_SERVER['REQUEST_METHOD'];

    if (!isset($routes[$request])) {
        throw new Exception("A rota não existe!");
    }

    if (!array_key_exists($uri, $routes[$request])) {
        throw new Exception("A rota não existe!");
    }

    // $connection = Connection::getConnection();
    // $query = $connection->query("SELECT * FROM users");
    // $rows = $query->fetchAll();

    // foreach ($rows as $row) {
    //     var_dump($row->name);
    // }
    
    $controller = $routes[$request][$uri];
    echo $controller();
    die();
} catch (\Exception $e) {
    http_response_code(500);
    echo $e->getMessage();
}