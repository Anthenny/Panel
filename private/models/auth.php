<?php
// Registreren en inloggen
require_once(__DIR__.'/../config/db.php');
class Auth extends Db {

  protected function getUsers() {
    $sql = "SELECT * FROM gebruikers";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $results;
  }

  protected function getGebruiker($gebruikerNaam) {
    $sql = "SELECT * FROM gebruikers WHERE gebruikerNaam = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$gebruikerNaam]);

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;

  }

  protected function setGebruiker($gebruikerNaam, $gebruikerWachtwoord, $gebruikerEmail, $gebruikerFunctie, $gebruikerRol) {
    $sql = "INSERT INTO gebruikers (gebruikerNaam, gebruikerWachtwoord, gebruikerEmail, gebruikerFunctie, gebruikerRol) VALUES (?, ?, ?, ?, ?)" ;
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$gebruikerNaam, $gebruikerWachtwoord, $gebruikerEmail,$gebruikerFunctie, $gebruikerRol]);  
  }
}