<?php

use Framework\Helper;
use Framework\View;

function dd($var){
    Helper::dd($var);
}

function view(string $route, array $data){
    View::render($route, $data);
}

?>