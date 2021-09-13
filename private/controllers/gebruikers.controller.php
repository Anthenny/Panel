<?php

require_once(__DIR__.'/../models/gebruikers.php');

class GebruikerContr extends Gebruikers {

  public function updateGebruikerr($gebruikerNaam, $gebruikerId) {
    $this->updateGebruiker($gebruikerNaam, $gebruikerId);
  }

  public function deleteGebruikerr($gebruikerNaam, $gebruikerId) {
    $this->updateGebruiker($gebruikerNaam, $gebruikerId);
  }
}