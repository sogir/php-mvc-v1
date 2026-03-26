<?php

use App\Controllers;
use App\Core\Router;
use App\Core\RouterNotFoundException;

use App\Core\Env;

Env::load(__DIR__ . '/../.env');

$router = new Router();

$router
->register('/', [Controllers\HomeController::class, 'index'])
->register('/about', [Controllers\AboutController::class, 'index']);


try {
     $router->resolve($_SERVER['REQUEST_URI']);
} catch (RouterNotFoundException $e) {
     echo $e->getMessage();
}