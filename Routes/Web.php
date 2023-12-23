<?php

use Framework\Src\Routing\Router;


Router::get("/", [\App\Controllers\SecondController::class, 'index']);
Router::get("/test2", [\App\Controllers\MainController::class, "index"]);