<?php

namespace Framework\Src\Routing;

class Controller
{
    public static function isExist($action): bool
    {
        $file = $_SERVER['DOCUMENT_ROOT'] . '/' . $action . '.php';
        if(file_exists($file)){
            return true;
        } else {
            return false;
        }
    }

}