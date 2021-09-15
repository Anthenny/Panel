    <?php
      include_once '../../private/controllers/auth.controller.php';
      $authController = new AuthContr();
      if(isset($_POST["logout"])) {
        $authController->logout();
      }
    ?>
    
    <!-- //SIDEBAR -->
    <div class="sidebar">
      <div class="container">
        <h1>Panel.</h1>

        <div class="dashboard"> 
          <h3>Dashboard</h3>
          <div class="item">
            <a href="./dashboard.php">
              <img class="hidden-img" src="../img/home.png" alt="icon" />
            </a>
            <a class="hidden-text" href="./dashboard.php">Home</a>
          </div>
          <div class="item">
            <a href="./home.php">
              <img class="hidden-img" src="../img/restaurant.png" alt="icon" />
            </a>
            <a class="hidden-text" href="./home.php">Ga naar restaurant </a>
          </div>
        </div>

        <div class="quick-menu">
          <h3>Quick Menu</h3>
          <div class="item">
            <a href="./personeel.php">
              <img class="hidden-img" src="../img/person.png" alt="icon" />
            </a>
            <a class="hidden-text" href="./personeel.php">Personeel</a>
          </div>
          <div class="item">
            <a href="./leveringen.php">
              <img class="hidden-img" src="../img/levering.png" alt="icon" />
            </a>
            <a class="hidden-text" href="./leveringen.php">Leveringen</a>
          </div>
        </div>

        <form class="logout" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
          
            <img src="../img/logout.png" alt="logout" />
            <button class="hidden-text" type="submit" name="logout">Log out</button>         
        </form>
      </div>
    </div>