<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/personeel.css" />
    <title>Personeel || Panel</title>
  </head>
  <body>
    
  <?php 
    include '../components/sidebar.php';
    include '../components/navDashboard.php';
    include_once '../../private/models/gebruikers.php';
    $gebruikers = new Gebruikers();
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

            <?php foreach($gebruikers->getGebruikers() as $gebruiker) { ?>
            <tr>
              <td><?php echo $gebruiker['gebruikerId'] ?></td>
              <td><?php echo $gebruiker['gebruikerNaam'] ?></td>
              <td><?php echo $gebruiker['gebruikerEmail'] ?></td>
              <td><?php echo $gebruiker['gebruikerFunctie'] ?></td>
              <td class="buttons">
                <button class="btn btn-edit">Edit</button>
                <button class="btn btn-delete">Delete</button>
              </td>
            </tr>
            <?php } ?>
            <!-- <tr>
              <td>2</td>
              <td>Olaf de Jong</td>
              <td>Olaf@hotmail.com</td>
              <td>Architect</td>
              <td class="buttons">
                <button class="btn btn-edit">Edit</button>
                <button class="btn btn-delete">Delete</button>
              </td>
            </tr>
            <tr>
              <td>3</td>
              <td>Anna Pegels</td>
              <td>Anna@hotmail.com</td>
              <td>Software Developer</td>
              <td class="buttons">
                <button class="btn btn-edit">Edit</button>
                <button class="btn btn-delete">Delete</button>
              </td>
            </tr>
            <tr>
              <td>4</td>
              <td>Emir de Haas</td>
              <td>Emir@hotmail.com</td>
              <td>HBO</td>
              <td class="buttons">
                <button class="btn btn-edit">Edit</button>
                <button class="btn btn-delete">Delete</button>
              </td>
            </tr>
            <tr>
              <td>5</td>
              <td>Quincy Pieren</td>
              <td>Quincy@hotmail.com</td>
              <td>Scammer</td>
              <td class="buttons">
                <button class="btn btn-edit">Edit</button>
                <button class="btn btn-delete">Delete</button>
              </td>
            </tr>
            <tr>
              <td>6</td>
              <td>Achmed de Mo</td>
              <td>Achie@hotmail.com</td>
              <td>Directeur</td>
              <td class="buttons">
                <button class="btn btn-edit">Edit</button>
                <button class="btn btn-delete">Delete</button>
              </td>
            </tr>
            <tr>
              <td>7</td>
              <td>Mo de Dief</td>
              <td>Mo@hotmail.com</td>
              <td>Classified</td>
              <td class="buttons">
                <button class="btn btn-edit">Edit</button>
                <button class="btn btn-delete">Delete</button>
              </td>
            </tr> -->
          </tbody>
        </table>
        <button class="btn-maak-gebruiker">Maak een gebruiker</button>
      </div>
    </div>

    <div class="modal-maak-personeel">
      <div class="box">
        <div class="close-personeel"><p>X</p></div>
        <h1>Maak een account</h1>

        <form action="">
          <div class="item">
            <p>Gebruiker</p>
            <input type="text" />
          </div>
          <div class="item">
            <p>Email</p>
            <input type="email" />
          </div>
          <div class="item">
            <p>Functie</p>
            <input type="text" />
          </div>
          <button>Voeg toe</button>
        </form>
      </div>
    </div>

    <script src="../js/modalPersoneel.js"></script>
  </body>
</html>
