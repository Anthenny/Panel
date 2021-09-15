<?php
  require_once '../../private/init.php';
  $paginaTitel = "Leveringen";
  include_once '../components/headerDashboard.php';
?>

    <div class="personeel__container">
      <div class="personeel__tabel">
        <table>
          <thead>
            <th>ID</th>
            <th>Bedrijf</th>
            <th>Datum</th>
            <th>Prijs</th>
            <th>Actie</th>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Hanos</td>
              <td>$399.00</td>
              <td class="amount">13-9-2021</td>
              <td class="buttons">
                <button class="btn btn-edit">Edit</button>
                <button class="btn btn-delete">Delete</button>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>Schmidt</td>
              <td class="amount">$300.00</td>
              <td>14-9-2021</td>
              <td class="buttons">
                <button class="btn btn-edit">Edit</button>
                <button class="btn btn-delete">Delete</button>
              </td>
            </tr>
            <tr>
              <td>3</td>
              <td>Nice 2 Meat</td>
              <td class="amount">$300.00</td>
              <td>14-9-2021</td>
              <td class="buttons">
                <button class="btn btn-edit">Edit</button>
                <button class="btn btn-delete">Delete</button>
              </td>
            </tr>
            <tr>
              <td>3</td>
              <td>Nice 2 Meat</td>
              <td class="amount">$300.00</td>
              <td>14-9-2021</td>
              <td class="buttons">
                <button class="btn btn-edit">Edit</button>
                <button class="btn btn-delete">Delete</button>
              </td>
            </tr>
            <tr>
              <td>3</td>
              <td>Nice 2 Meat</td>
              <td class="amount">$300.00</td>
              <td>14-9-2021</td>
              <td class="buttons">
                <button class="btn btn-edit">Edit</button>
                <button class="btn btn-delete">Delete</button>
              </td>
            </tr>
            <tr>
              <td>3</td>
              <td>Nice 2 Meat</td>
              <td class="amount">$300.00</td>
              <td>14-9-2021</td>
              <td class="buttons">
                <button class="btn btn-edit">Edit</button>
                <button class="btn btn-delete">Delete</button>
              </td>
            </tr>
            <tr>
              <td>3</td>
              <td>Nice 2 Meat</td>
              <td class="amount">$300.00</td>
              <td>14-9-2021</td>
              <td class="buttons">
                <button class="btn btn-edit">Edit</button>
                <button class="btn btn-delete">Delete</button>
              </td>
            </tr>
          </tbody>
        </table>
        <button class="btn-maak-gebruiker">Maak een levering</button>
      </div>
    </div>

    <div class="modal-maak-personeel">
      <div class="box">
      <div class="header">
          <div class="close-personeel"><p>X</p></div>
          <h1>Maak een levering</h1>
        </div>

        <form action="">
          <div class="item">
            <p>Datum</p>
            <input type="text" />
          </div>
          <div class="item">
            <p>Prijs</p>
            <input type="text" />
          </div>
          <div class="item">
            <p>Bedrijf</p>
            <input type="text" />
          </div>
          <button>Voeg toe</button>
        </form>
      </div>
    </div>
    <script src="../js/modalPersoneel.js"></script>
  </body>
</html>
