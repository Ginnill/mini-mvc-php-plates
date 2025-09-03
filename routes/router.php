<?php

function load(string $controller, string $action, $params = null)
{

    try {
        $controllerNamespace = "app\\controllers\\{$controller}";

        if (!class_exists($controllerNamespace)) {
            throw new \Exception("O controller {$controller} não existe!");
        }

        $controllerInstance = new $controllerNamespace();

        if (!method_exists($controllerInstance, $action)) {
            throw new \Exception("O método {$action} não existe no controller!");
        }

        return $params ? $controllerInstance->$action($params)
            : $controllerInstance->$action();
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}

$routes = [
    "GET" => [
        '/' => fn() => load("HomeController", "index")
    ],
    "POST" => [
        "/" => fn() => load("HomeController", "form", (object)$_REQUEST)
    ],
];
