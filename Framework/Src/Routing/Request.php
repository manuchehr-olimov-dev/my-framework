<?php

namespace Framework\Src\Routing;

class Request
{

    public static function isRequestMethodEqualTo(string $method)
    {
        if($_SERVER['REQUEST_METHOD'] !== $method) {
            die("Метод запроса должен быть: " . $method);
        } else {
            return true;
        }
    }


}