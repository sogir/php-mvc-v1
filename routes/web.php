<?php

use App\Core\Router;
use App\Core\RouterNotFoundException;

$router = new Router();

$router
->register('/', [App\Controllers\HomeController::class, 'index'])
->register('/about', [App\Controllers\AboutController::class, 'index']);


try {
     $router->resolve($_SERVER['REQUEST_URI']);
} catch (RouterNotFoundException $e) {
     echo $e->getMessage();
}