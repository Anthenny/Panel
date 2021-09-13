<?php
// Gebruikers laten zien, update delete
require_once(__DIR__.'/../config/db.php');

class Gebruikers extends Db {
  
    public function getGebruikers() {
      $sql = "SELECT * FROM gebruikers";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute();
  
      while($result = $stmt->fetchAll(PDO::FETCH_ASSOC)){
        return $result;
      }
    }

    protected function getGebruiker($gebruikerId) {
      $sql = "SELECT * FROM gebruikers WHERE gebruikerId = ?";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$gebruikerId]);
  
      $results = $stmt->fetch(PDO::FETCH_ASSOC);
      return $results;
    }

    protected function updateGebruiker($gebruikerNaam, $gebruikerId) {
      $sql = "UPDATE gebruikers SET gebruikerNaam = ? WHERE gebruikerId = ?";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$gebruikerNaam, $gebruikerId]);
    }

    protected function DeleteGebruiker($gebruikerId) {
      $sql = "DELETE FROM gebruikers WHERE gebruikerId = ?";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$gebruikerId]);
    }
  
};

