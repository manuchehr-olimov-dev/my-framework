<?php

namespace Framework\Src\Routing;

class Request
{

    public static function isRequestMethodEqualTo(string $method)
    {
        if($_SERVER['REQUEST_METHOD'] !== $method) {
            exit("Метод запроса должен быть: " . $method);
        } else {
            return true;
        }
    }

    public static function isRequestUriEqualTo(string $route)
    {
        if($_SERVER["REQUEST_URI"] === $route) {
            return true;
        }
    }


}