<?php

namespace Framework\Src\Routing;

class Router 
{
    public static function Get(string $route, array $action): void
    {
        Request::isRequestMethodEqualTo("GET");

        if($_SERVER["REQUEST_URI"] === $route)
        {
            require_once "./{$action[0]}.php";
            $controllerName     =   $action[0];
            $controller         =   new $controllerName;
            $controllerMethod   =   $action[1];
            $controller->$controllerMethod();
            exit();
        }
    }

    public static function View(string $route, string $view): void
    {
        Request::isRequestMethodEqualTo("GET");

        if($_SERVER["REQUEST_URI"] === $route) {
            require_once "./View/{$view}.html.twig";
            exit();
        }
    }

    public static function Page404()
    {

    }


}

