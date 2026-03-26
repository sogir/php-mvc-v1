<?php

namespace App\Core;

class Database
{   
     protected $PDO;

     public function __construct()
     {
          $host = $_ENV['DB_HOST'] ?? 'localhost';
          $db   = $_ENV['DB_NAME'] ?? '';
          $user = $_ENV['DB_USER'] ?? 'root';
          $pass = $_ENV['DB_PASS'] ?? '';

          try {
               $dsn = "mysql:host=$host;dbname=$db";
               $this->PDO = new \PDO($dsn, $user, $pass);
          }
          catch (\PDOException $e)
          {
               echo $e->getMessage();
          }
     }

     public function getConnection()
     {
          return $this->PDO;
     }
}
