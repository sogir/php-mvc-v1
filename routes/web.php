<?php

use App\Core\Router;

$router = new Router();

$router->register('/', function()
     {
          echo "Hello World";
     });

$router->resolve($_SERVER['REQUEST_URI']);