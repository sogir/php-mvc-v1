<?php

namespace App\Core;

class Router
{
     private $routes = [];

     public function register(string $url, callable $callback)
     {
          $this->routes[$url] = $callback;

          return $this;
     }

     public function resolve(string $requestUrl)
     {
          $route = explode("?", $requestUrl)[0];

          $action = $this->routes[$route] ?? null;

          if(!$action) {
               echo "404";               
          }

          return call_user_func($action);
     }
}
