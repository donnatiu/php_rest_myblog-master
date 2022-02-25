<?php 
  class Database {
    // DB Params
    private $host = getenv('MY_HOST');
    private $db_name = getenv('MY_DB_NAME');
    private $username = getenv('MY_USERNAME');
    private $password = getenv('MY_PASSWORD');
    private $conn;

    // DB Connect
    public function connect() {
      $this->conn = null;

      try { 
        $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch(PDOException $e) {
        echo 'Connection Error: ' . $e->getMessage();
      }

      return $this->conn;
    }
  }