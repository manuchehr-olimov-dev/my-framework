<?php

namespace Framework;

class Router 
{
    public static function get(string $route, array $action)
    {
        if($_SERVER["REQUEST_URI"] === $route && $_SERVER['REQUEST_METHOD'] === "GET")
        {
            require_once "./{$action[0]}.php";
            $controllerName     =   $action[0];
            $controller         =   new $controllerName;
            $controllerMethod   =   $action[1];
            $controller->$controllerMethod();
            return exit();
        }
    }


}


?>