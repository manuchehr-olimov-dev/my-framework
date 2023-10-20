<?php

use App\Controllers\MainController;
use App\Controllers\SecondController;
use App\Model\User;
use Framework\Helper;
use Framework\Model;
use Framework\Router;
use Framework\View;
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/Framework/main.php';


$m = new User;


dd($m->select([123])->select([456]));
// Router::get("/a", [MainController::class, "index"]);
// Router::get("/b", [MainController::class,"b"]);

?>