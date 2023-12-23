<?php

namespace Framework\Src;

class App
{
    public static function run()
    {
        require_once('./Routes/Web.php');
        dd($_SERVER);
    }

}