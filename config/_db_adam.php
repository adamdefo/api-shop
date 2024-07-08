<?php
/**
 * Подключение к базе
 * User: Adam Defo
 */

include 'db_adam_config.php';

class DB extends DB_config {

  public $connect;
  public $dataset;
  public $last_insert_id;
  private $sql_query;
  
  protected $db_host;
  protected $db_name;
  protected $db_user;
  protected $db_pass;

  function DB() {
    $this->connect = NULL;
    $this->dataset = NULL;
    $this->last_insert_id = NULL;
    $this->sql_query = NULL;
    
    $db_config = new DB_config();
    $this->db_host = $db_config->db_host;
    $this->db_name = $db_config->db_name;
    $this->db_user = $db_config->db_user;
    $this->db_pass = $db_config->db_pass;
    $db_config = NULL;
  }

  public function createConnect() {
    $connect = new PDO('mysql:dbname='.$this->db_name.';host='.$this->db_host, $this->db_user, $this->db_pass);
    $connect->exec("set names utf8");
    return $connect;
  }

  public function executeQuery($sql) {
    $conn = $this->createConnect();
    $this->sql_query = $conn->prepare($sql);
    $this->sql_query->execute();
    $this->last_insert_id = $conn->lastInsertId();
    return $this->sql_query;
  }
  
  public function printLog($data) {
  	echo '<pre>';
  	print_r($data);
  	echo '</pre>';
  }

}