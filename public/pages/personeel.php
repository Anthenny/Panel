<?php
  require_once '../../private/init.php';
  $paginaTitel = "Dashboard";
  include_once '../components/headerDashboard.php';

  $gebruikerView = new GebruikerView();
  $gebruikerController = new GebruikerContr();

  if(isset($_GET["deleteGebruikerId"])) $gebruikerController->removeGebruiker();
  if(isset($_POST["add"])) $gebruikerController->createGebruiker();
?>  

    <div class="personeel__container">
      <div class="personeel__tabel">
        <table>
          <thead>
            <th>ID</th>
            <th>Gebruiker</th>
            <th>Email</th>
            <th>Functie</th>
            <th>Actie</th>
          </thead>
          <tbody> 

            <?php foreach($gebruikerView->showGebruikers() as $gebruiker) { ?>
            <tr>
              <td><?php echo $gebruiker['gebruikerId'] ?></td>
              <td><?php echo $gebruiker['gebruikerNaam'] ?></td>
              <td><?php echo $gebruiker['gebruikerEmail'] ?></td>
              <td><?php echo $gebruiker['gebruikerFunctie'] ?></td>
              <td class="buttons">
                <a href="editPersoneel.php?editGebruikerId=<?= $gebruiker['gebruikerId']?>" class="btn btn-edit">Edit</a>
                <a href="personeel.php?deleteGebruikerId=<?= $gebruiker['gebruikerId']?>" class="btn btn-delete">Delete</a>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
        <button class="btn-maak-gebruiker">Maak een gebruiker</button>
      </div>
    </div>

    <div class="modal-maak-personeel">
      <div class="box">
        <div class="header">
          <div class="close-personeel"><p>X</p></div>
          <h1>Maak een account</h1>
        </div>

        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
          <div class="item">
            <p>Gebruiker</p>
            <input type="text" name="naam" />
          </div>
          <div class="item">
            <p>Email</p>
            <input type="email" name="email" />
          </div>
          <div class="item">
            <p>Wachtwoord</p>
            <input type="password" name="wachtwoord" />
          </div>
          <div class="item">
            <p>Functie</p>
            <input type="text" name="functie" />
          </div>
          <button type="submit" name="add">Voeg toe</button>
        </form>
      </div>
    </div>
    <script src="../js/modalPersoneel.js"></script>
  </body>
</html>
