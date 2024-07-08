<?php

class Database {
  private $host = "localhost";
  private $db_name = "API_PHP";
  private $username = "admin";
  private $password = "123456";
  public $conn;

  public function getConnection() {
    $this->conn = null;

    try {
      $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
      $this->conn->exec("set names utf8");
    } catch (PDOException $exception) {
      echo "Ошибка подключения: " . $exception->getMessage();
    }

    return $this->conn;
  }
}