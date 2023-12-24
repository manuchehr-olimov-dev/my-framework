<?php

use Framework\Src\Routing\Router;
use App\Controllers\SecondController;

Router::get("/", [SecondController::class, 'index']);
//Router::get("/test2", [\App\Controllers\MainController::class, "index"]);
//
//Router::view('/////v', 'test-2');

Router::page404();