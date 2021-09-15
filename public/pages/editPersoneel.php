<?php
  require_once '../../private/init.php';
  $paginaTitel = "Edit Personeel";
  include_once '../components/headerDashboard.php';


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
