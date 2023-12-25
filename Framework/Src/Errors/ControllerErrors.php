<?php

namespace Framework\Src\Errors;


class ControllerErrors
{
    public static function notExist(array $errInfo)
    {
        $controller = $errInfo[0]['args'][1][0];
        ErrorManager::show([
            "errorMessage"  =>  "Контроллера  $controller не существует!",
            "errorLineNum"  =>  $errInfo[0]["line"],
            "errorFile"     =>  $errInfo[0]["file"]
        ]);
    }
}