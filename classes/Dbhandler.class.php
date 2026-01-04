<?php 

class Dbhandler {
  private $host;
  private $user;
  private $pass;
  private $db;
  private $port;
  public $conn;

  public function __construct() {
    $this->connect();
  }

  private function connect() {
    // XAMPP credentials
    $this->host = "127.0.0.1";
    $this->user = "root";
    $this->pass = "";
    $this->db   = "ogtech";
    $this->port = 3307; // IMPORTANT

    // connect to db
    $this->conn = new mysqli(
      $this->host,
      $this->user,
      $this->pass,
      $this->db,
      $this->port
    );

    if ($this->conn->connect_error) {
      die("Database connection failed: " . $this->conn->connect_error);
    }

    return $this->conn;
  }

  public function conn() {
    return $this->conn;
  }
}
