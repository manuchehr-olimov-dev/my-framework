<?php
namespace App\Controllers;

class MainController
{
    public function index()
    {
        return view("test", ["name" => "manuchehr"]);
    }

    public function b()
    {
        return view("test", ["name"=> "ne nado tak"]);
    }
}
?>