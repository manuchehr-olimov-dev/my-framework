<?php

namespace Framework\Src;

class Helper
{
    public static function dd($var): void
    {
        echo "<pre>";
            var_dump($var);
        echo "</pre>";

        die();
    }
}

?>