<?php 

require_once(__DIR__.'/../models/gebruikers.php');

class GebruikerContr extends Gebruikers {


  public function createGebruiker() {
    
    $gebruikerNaam = $_POST["naam"];
    $gebruikerWachtwoord = $_POST["wachtwoord"];
    $gebruikerEmail = $_POST["email"]; 
    $gebruikerFunctie = $_POST["functie"];
    $gebruikerRol = "medewerker";

    $hashedWachtwoord = password_hash($gebruikerWachtwoord, PASSWORD_BCRYPT);

    $this->setGebruiker($gebruikerNaam, $hashedWachtwoord, $gebruikerEmail, $gebruikerFunctie, $gebruikerRol);
    header("Location: ../../public/pages/personeel.php");
  }

  public function vindGebruiker() {
    $gebruikerId = $_GET["editGebruikerId"];
    $gebruiker = $this->getGebruiker($gebruikerId);

    return $gebruiker;

  }
 
  public function removeGebruiker() {
    $gebruikerId = $_GET["deleteGebruikerId"];
    $this->deleteGebruiker($gebruikerId);
    header("Location: ../../public/pages/personeel.php");

  }

  public function editGebruiker() {

    $gebruikerNaam = $_POST["naam"];
    $gebruikerEmail = $_POST["email"];
    $gebruikerFunctie = $_POST["functie"];
    $gebruikerId = $_POST["id"];

    $this->updateGebruiker($gebruikerNaam, $gebruikerEmail, $gebruikerFunctie ,$gebruikerId);
    header("Location: ../../public/pages/personeel.php");

  }
}