<?php

namespace Framework\Src\Routing;

class Router 
{
    public static function get(string $route, array $action): void
    {
        if($_SERVER["REQUEST_URI"] === $route && $_SERVER['REQUEST_METHOD'] === "GET")
        {
            require_once "./{$action[0]}.php";
            $controllerName     =   $action[0];
            $controller         =   new $controllerName;
            $controllerMethod   =   $action[1];
            $controller->$controllerMethod();
            exit();
        }
    }

    public static function view(string $route, string $view): void
    {
        if($_SERVER["REQUEST_URI"] === Router::normalizeSlashes($route) && $_SERVER['REQUEST_METHOD'] === "GET") {
            require_once "./View/{$view}.html.twig";
            exit();
        }
    }

    public static function normalizeSlashes(string $route): string
    {
        //Delete All extra slashes from route
        $normalizedRoute = str_replace('/', '', $route);
        return "/" . $normalizedRoute;
    }
}


?>