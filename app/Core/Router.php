<?php

namespace App\Core;

use App\Core\RouterNotFoundException;

class Router
{
     private $routes = [];

     public function register(string $url, callable|array $callback): self
     {
          $this->routes[$url] = $callback;

          return $this;
     }

     public function resolve(string $requestUrl)
     {
          $route = rtrim(explode("?", $requestUrl)[0], '/') ?: '/';

          $action = $this->routes[$route] ?? null;

          if(!$action) {
               throw new RouterNotFoundException();
          }

          if(is_callable($action)) {
               return call_user_func($action);
          }

          if(is_array($action)) {
               [$class, $method] = $action;

               if(!class_exists($class)){
                    throw new RouterNotFoundException();
               }

               $controller = new $class();

               if(!method_exists($controller, $method)) {
                    throw new RouterNotFoundException();
               }

               return $controller->$method();               
          }

          throw new RouterNotFoundException();

     }
}
