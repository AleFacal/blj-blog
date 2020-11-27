<?php
     $user = 'root';
     $password = '';
    

     $pdo = new PDO('mysql:host=localhost;dbname=blog', $user, $password, [
          PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
          PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
     ]);
          $query = 'select * from posts limit 3';

          if (($_GET['action'] ?? '') === 'all'){
               $query = 'select * from posts order by created_at desc';
          }
          $stmt = $pdo->query($query);
          $rows = $stmt->fetchAll)();

          foreach($rows as $row){
               echo $row["created_by"] . ', Post' . $row["description"] . '<br>';         }
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
     <br>
     <br>
     <form class="postform" action="newpost.php" method="POST">
          <input class="posttitle" type="text" name="post-title" placeholder="Title" size="35"/><br><br>
          <input class="usern" type="text" name="username" placeholder="Your Name" size="30"/> <br><br>
          <textarea name="post-text" placeholder="Write your post." rows="10" cols="80"></textarea><br>
          <button type="submit" name="Add-Post">Add Post</button>   
     </form>

     


</main>
</body>
</html>



