<?php

namespace Framework;

class Helper
{
    public static function dd($var)
    {
        echo "<pre>";
        var_dump($var);
        echo "</pre>";
        
        return die();
    }
}

?>