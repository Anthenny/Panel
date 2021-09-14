<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/auth.css" />
    <title>Log in || Panel</title>
  </head>
  <body>
  <?php
  include_once '../../private/controllers/auth.controller.php';
  if(isset($_POST["login"])){
    $gebruiker = new AuthContr();
    $gebruiker->loginGebruiker(); 
  }
  ?> 
    <div class="login__container">
      <div class="left">
        <img src="../img/chef.png" alt="" />
      </div> 
      <div class="right">
        <h1>Log in</h1>
        <h3>Welkom terug</h3>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
          <input type="text" placeholder="Vul uw naam in" name="naam" />
          <input type="password" placeholder="Vul uw wachtwoord in" name="wachtwoord" />
          <button type="submit" name="login">Login</button>
          <p>Geen account? <a href="./registreer.php">Registreer nu!</a></p>
        </form>
      </div>
    </div>
  </body>
</html>
