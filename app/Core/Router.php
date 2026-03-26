<?php

namespace App\Core;

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
          $route = explode("?", $requestUrl)[0];

          $action = $this->routes[$route] ?? null;

          if(!$action) {
               echo "404";
          }

          if(is_callable($action)) {
               call_user_func($action);
          }

          if(is_array($action)) {
               [$class, $method] = $action;

               $controller = new $class();

               if(!method_exists($controller, $method)) {
                    echo "404";
                    return;
               }

               return $controller->$method();                         
          }

     }
}
