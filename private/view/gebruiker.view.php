<?php

require_once(__DIR__.'/../models/gebruikers.php');


class GebruikerView extends Gebruikers {

    public function showGebruikers() {
        $results = $this->getGebruikers();
        return $results;
      }
    }

