<!DOCTYPE html>
<html lang="en">
  <head> 
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/editPersoneel.css" />
    <title>Edit Personeel || Panel</title>
  </head>
  <body>
     
  <?php 
    include '../components/sidebar.php';
    include '../components/navDashboard.php';
    include_once '../../private/controllers/gebruikers.controller.php';

    $gebruikerController = new GebruikerContr();
    $gebruiker = $gebruikerController->vindGebruiker();

    if(isset($_POST["editBtn"])) {
        $gebruikerController->editGebruiker();
    }

    

    ?>

    <div class="edit__container">
        <div class="form__container">
            <h1>Edit Gebruiker</h1>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                <div class="item">
                    <p>Gebruiker</p>
                    <input type="text" name="naam" value="<?= $gebruiker["gebruikerNaam"] ?>" />
                </div>
                <div class="item">
                    <p>Email</p>
                    <input type="email" name="email" value="<?= $gebruiker["gebruikerEmail"] ?>" />
                </div>
                <div class="item">
                    <p>Functie</p>
                    <input type="text" name="functie" value="<?= $gebruiker["gebruikerFunctie"] ?>" />
                    <input type="hidden" name="id"   value="<?= $gebruiker["gebruikerId"] ?>">
                </div>
                <button type="submit" name="editBtn">Edit</button>
            </form>
        </div>
    </div>
  </body>
</html>
