<?php

use App\Core\Router;

$router = new Router();

$router
->register('/', [App\Controllers\HomeController::class, 'index'])
->register('/about', [App\Controllers\AboutController::class, 'index'])
->register('/about/contact', [App\Controllers\AboutController::class, 'contact']);


$router->resolve($_SERVER['REQUEST_URI']);