<?php 
// Gebruikers laten zien, update delete
require_once(__DIR__.'/../config/db.php');

class Gebruikers extends Db {
  
    public function getGebruikers() {
      $sql = "SELECT * FROM gebruikers";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute();
      
      $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $results;  

    }

    protected function getGebruiker($gebruikerId) {
      $sql = "SELECT * FROM gebruikers WHERE gebruikerId = ?";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$gebruikerId]);
  
      $results = $stmt->fetch(PDO::FETCH_ASSOC);
      return $results;
    }

    protected function setGebruiker($gebruikerNaam, $gebruikerWachtwoord, $gebruikerEmail, $gebruikerFunctie, $gebruikerRol) {
      $sql = "INSERT INTO gebruikers (gebruikerNaam, gebruikerWachtwoord, gebruikerEmail, gebruikerFunctie, gebruikerRol) VALUES (?, ?, ?, ?, ?)" ;
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$gebruikerNaam, $gebruikerWachtwoord, $gebruikerEmail,$gebruikerFunctie, $gebruikerRol]);  
    }

    protected function updateGebruiker($gebruikerNaam, $gebruikerEmail, $gebruikerFunctie, $gebruikerId) {
      $sql = "UPDATE gebruikers SET gebruikerNaam = ?, gebruikerEmail = ?, gebruikerFunctie = ? WHERE gebruikerId = ? LIMIT 1";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$gebruikerNaam, $gebruikerEmail, $gebruikerFunctie, $gebruikerId]);
    }

    protected function deleteGebruiker($gebruikerId) {
      $sql = "DELETE FROM gebruikers WHERE gebruikerId = ?";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$gebruikerId]);
    }
  
};

