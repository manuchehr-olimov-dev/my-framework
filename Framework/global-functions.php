<?php

function dd($var){
    return \Framework\Src\Helper::dd($var);
}

function view(string $view, array $data = [])
{
    $view = new \Framework\Src\View\View($view, $data);
    return $view->render();
}

?>