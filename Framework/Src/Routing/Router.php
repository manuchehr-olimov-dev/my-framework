<?php

namespace Framework\Src\Routing;

use App\Controllers\MainController;
use Framework\Src\Errors\ControllerErrors;

class Router
{
    public static function get(string $route, array $action): void
    {
        $debug = debug_backtrace();
//        Request::isRequestMethodEqualTo("GET");
//        Request::isRequestUriEqualTo($route);
        $controllerName     =   $action[0];
        $controllerMethod   =   $action[1];
        // $action[0] will return \App\Framework\{ControllerName}

        if(Controller::isExist($controllerName) === false){
                ControllerErrors::notExist($debug);
        }
        require_once $_SERVER['DOCUMENT_ROOT'] . '/' . $action[0] . '.php';
        $controller = new $controllerName;
        $controller->$controllerMethod();
        exit();

    }

    public static function view(string $route, string $view): void
    {
        Request::isRequestMethodEqualTo("GET");
        if($_SERVER["REQUEST_URI"] === $route) {
            require_once "./Resources/{$view}.html.twig";
            exit();
        }
    }

    public static function page404(string $customPage = "")
    {
        if($customPage === ""){
            require_once $_SERVER['DOCUMENT_ROOT'] . "/Framework/Src/Html/page404.html";
        } else {
            require_once $_SERVER['DOCUMENT_ROOT'] . "/Framework/Src/Html/page404.html";

        }
        exit();
    }


}

