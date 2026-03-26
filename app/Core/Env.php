<?php

namespace App\Core;

class Env
{
     public static function load(string $path)
     {
          $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
          
          foreach ($lines as $line) {
               if (str_starts_with(trim($line), '#')) {
                    continue;
               }

               if (strpos($line, '=') !== false) {
                    [$key, $value] = explode('=', $line, 2);

                    $key = trim(trim($key), '"\'');
                    $value = trim(trim($value), '"\'');

                    putenv("$key=$value");
                    $_ENV[$key] = $value;
                    $_SERVER[$key] = $value;
               }

          }

          
     }
}
