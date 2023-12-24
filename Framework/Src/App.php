<?php

namespace Framework\Src;

class App
{
    public static function run(): void
    {
        require_once('./Routes/Web.php');
    }



}