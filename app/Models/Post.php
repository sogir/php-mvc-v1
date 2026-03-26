<?php

namespace App\Models;

class Post extends Model
{
     public function all()
     {
          $stmt = $this->db->prepare("SELECT * FROM posts");
          $stmt->execute();

          return $stmt->fetchAll();
     }
}
