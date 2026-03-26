<?php

namespace App\Controllers;

use App\Core\Controller;

use App\Models\Post;

class HomeController extends Controller
{
     public function index()
     {
          $post = new Post();

          $posts = $post->all();

          $this->render(
               'home', 
               [
                    'title' => 'Home',
                    'posts' => $posts
               ]
          );
     }
}
