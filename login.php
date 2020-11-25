
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
  <div class="row">
    <div class="cal-mc-5">
     
    </div>
    <div class="cal-mc-5">
      <div class="content-box">
        <h3>Registration</h3>
        <form method="POST" action="login.php">
        
  <label for="email">E-Mail:</label><br>
  <input class="text" type="text" id="email" name="email"><br>
  <label for="pword">Password:</label><br>
  <input class="text"type="text" id="pword" name="pword">
  <br>
  <br>
  <p>Noch nicht angemeldet?</p>
  <br>
  <a href="Registration.php">Hier Registrieren</a>
  
  
</form>
        
      </div>
    </div>
  </div>
</main>
     
     </body>

</html>



