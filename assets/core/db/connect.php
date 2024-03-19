<?php
// Class for connecting to database
class Connection {
  // Properties/attributes
  private $dbhost = 'localhost';
  private $dbname = 'diagnosis';
  private $user = 'root';
  private $password = '';

  // Methods
  public function connect() {
    try {
      $dsn = "mysql:host=$this->dbhost;dbname=$this->dbname";
      $connection = new PDO($dsn, $this->user, $this->password);
      // Set error attributes
      $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $connection;
    }
    catch(PDOException $e) {
      return false;
    }
  }
}
