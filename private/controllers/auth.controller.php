<?php

require_once(__DIR__.'/../models/auth.php');

class AuthContr extends Auth {

  public function createGebruiker() {

    $gebruikerNaam = $_POST["naam"];
    $gebruikerWachtwoord = $_POST["wachtwoord"];
    $bevestigWachtwoord = $_POST["bevestigWachtwoord"];
    $gebruikerEmail = $_POST["email"];
    $gebruikerFunctie = "nvt";
    $gebruikerRol = "nvt";

    // if($gebruikerWachtwoord !== $bevestigWachtwoord) {
    //   echo "Wachtwoord matched niet";
    //   return;
    // }

    $this->setGebruiker($gebruikerNaam, $gebruikerWachtwoord, $gebruikerEmail, $gebruikerFunctie, $gebruikerRol);
    header("Location: ../../public/pages/login.php");
  }
}