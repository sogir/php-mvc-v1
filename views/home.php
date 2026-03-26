<h1><?php echo $title; ?></h1>
<?php foreach ($posts as $post): ?>
     <p>
          <ul>
               <li><?php echo $post['title']; ?></li>
               <?php echo $post['reaction']; ?> Likes
          </ul>
          
     </p>
<?php endforeach; ?>