<?php

class DB_config {
  protected $db_host;
  protected $db_name; // базы данных
  protected $db_user; // имя пользователя
  protected $db_pass; // пароль

  function DB_config() {
    $this->db_host = 'localhost';
    $this->db_name = 'mello7_adam';
    $this->db_user = 'mello7_adam';
    $this->db_pass = 'DK2929vb1';
  }
}