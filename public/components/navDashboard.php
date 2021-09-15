<?php
  session_start();
?>

<header>
  <?php
    if(isset($_SESSION["gebruikerNaam"])){ ?>
      <h1>Welkom <?= $_SESSION["gebruikerNaam"]?></h1>
      <img src="../img/person-1.png" alt="profiel foto" />
    
    <?php }
     else {
      header('location: login.php?jemoeder'); 
    }
    ?>
    
</header>