 <?php
 
 class Db {

  private $gebruikersNaam = "root";
  private $wachtwoord = "Anthennyanna1997";
  private $host = "localhost";
  private $dbName = "panel";

  public function connect() {
    try {
      $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
      $pdo = new PDO($dsn, $this->gebruikersNaam, $this->wachtwoord);
      $pdo->setAttribute(PDO::ERRMODE_EXCEPTION, PDO::ATTR_CASE);
      return $pdo;

    } catch (PDOException $e) {
      echo "connectie mislukt" . $e->getMessage();
    }
  }
}