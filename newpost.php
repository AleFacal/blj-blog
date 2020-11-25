<?php
     $user = 'root';
     $password = '';
     $title = ''; 

     $pdo = new PDO('mysql:host=localhost;dbname=blog', $user, $password, [
          PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
          PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
     ]);

     if($_SERVER['REQUEST_METHOD'] === 'POST') {
          $description = $_POST['post-text'];
          $userName = $_POST  ['username'];

          $stmt = $pdo->prepare("INSERT INTO `posts` (created_at, title, description, username) VALUES(now(), :title ,:desc, :user) ");
          $stmt->execute([':title' => $title, ':desc' => $description, ':user' => $userName]);
     }
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css ">
</head>
     <body>
     <header class="site-header">
       
     <?php 
        include 'app/includes/navigation.php'
      ?>    
</header>

     <main role="main" class="container">

     <h1>Create a new Post</h1>
     
     <form action="newpost.php" method="POST">
          <input type="text" name="username" placeholder="Your Name"/> 
          <textarea name="post-text" placeholder="Write your post."></textarea>
          <button type="submit" name="Add-Post">Add Post</button>   
     </form>

     


</main>
</body>
</html>



