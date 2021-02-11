<?php

class FunctionGlobal
{
  public $host;
  public $db;
  public $user;
  public $password;

  public function conexao ($host, $db, $user, $password)
  {
      try {
        $pdo = new PDO('mysql:host='. $host .'; dbname=' .$db, $user, $password);
        return $pdo;
      } catch (\PDOException $e) {
        $e->getMessage(). '<br>';
        $e->getLine(). '<br>';
        $e->getCode(). '<br>';
      }
      return false;
  }


}
