<?php

namespace App\Core;

class Controller
{
     public function render(string $view, array $params = [])
     {
          extract($params);

          ob_start();
          require_once __DIR__ . "/../../views/{$view}.php";
          $content = ob_get_clean();

          ob_start();
          require_once __DIR__ . "/../../views/layouts/main.php";
          $layout = ob_get_clean();

          echo str_replace("{{content}}", $content, $layout);
     }
}