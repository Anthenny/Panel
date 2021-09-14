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

    $this->setGebruiker($gebruikerNaam, $gebruikerWachtwoord, $gebruikerEmail, $gebruikerFunctie, $gebruikerRol);
    header("Location: ../../public/pages/login.php");
  }

  public function loginGebruiker() {
    $gebruikerNaam = $_POST["naam"];
    $gebruikerWachtwoord = $_POST["wachtwoord"];

    $gebruiker = $this->getGebruiker($gebruikerNaam);

    if($gebruiker) {
      if($gebruikerNaam !== $gebruiker["gebruikerNaam"]) {
        echo "Foute naam"; 
        return;
      }
  
      if($gebruikerWachtwoord !== $gebruiker["gebruikerWachtwoord"]) {
        echo "Fout wachtwoord!"; 
        return;
      }
  
      header('location: ../../public/pages/dashboard.php');
    } else {
      echo "Kon niemand vinden";
    }

  }

}