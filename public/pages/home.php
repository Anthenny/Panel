<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css//home.css" />
    <title>Home || Panel</title> 
  </head>
  <body>
    <div class="home__container">
      <header>
        <div class="logo">Panel</div>
        <nav>
          <ul>
            <li class="active">
              <a href="./home.php">Home</a>
            </li>
            <li>
              <a href="./registreer.php">Registreren</a>
            </li>
            <li>
              <a href="./login.php">Login</a>
            </li>
          </ul>
        </nav> 
      </header>
      <main>
        <h1>Table for two</h1>
        <div class="buttons">
          <button class="btn-reserveren">Reserveren</button>
          <button class="menu btn-menu">Bekijk menu</button>
        </div>
      </main>
    </div>
    <div class="background">
      <div class="overlay"></div>
    </div>

    <div class="modal-reserveren">
      <div class="box">
        <div class="header">
          <div class="close-reserveren"><p>X</p></div>
          <h1>Reserveren voor <span>Panel</span></h1>
        </div>

        <form action="">
          <div class="item">
            <p>Naam:</p>
            <input type="text" />
          </div>
          <div class="item">
            <p>Personen:</p>
            <input type="text" />
          </div>
          <div class="item">
            <p>Datum:</p>
            <input type="text" />
          </div>
          <button>Reserveren</button>
        </form>
      </div>
    <script src="../js/modalHome.js"></script>
  </body>
</html>
