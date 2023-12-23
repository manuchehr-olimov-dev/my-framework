<?php

function dd($var){
    \src\Helper::dd($var);
}

function view(string $route, array $data){
    \Framework\View\View::render($route, $data);
}

?>