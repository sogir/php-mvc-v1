<?php

namespace App\Core;

class Controller
{
     public function render(string $view, array $params = [])
     {
          extract($params);
          return require_once __DIR__ . "/../../views/{$view}.php";
     }
}