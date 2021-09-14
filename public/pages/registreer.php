<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/auth.css" />
    <title>Registreer || Panel</title>
  </head>
  <body>
  <?php
  include_once '../../private/controllers/auth.controller.php';
  if(isset($_POST["registreren"])){
    $gebruiker = new AuthContr();
    $gebruiker->createGebruiker();
  }
  ?> 
    <div class="registreer__container">
      <div class="left">
      <img src="../img/chef.png" alt="" />
      </div>
      <div class="right">
        <h1>Registreren</h1>
        <h3>Welkom</h3>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
          <input type="text" placeholder="Vul uw naam in" name="naam" />
          <input type="email" placeholder="Vul uw email in" name="email" />
          <input type="password" placeholder="Vul uw wachtwoord in" name="wachtwoord" />
          <input type="password" placeholder="Vul uw wachtwoord opnieuw in" name="bevestigWachtwoord" />
          <button type="submit" name="registreren">Registreren</button>
          <p>Al een account? <a href="./login.php">Login!</a></p>
        </form>
      </div>
    </div>
  </body>
</html>
