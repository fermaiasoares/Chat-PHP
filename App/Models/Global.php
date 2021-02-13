<?php


class GlobalFunction
{

  public function conexao ($host, $db, $user, $password)
  {
     try {
        return new PDO("mysql:host=$host; dbname=$db", "$user", $password);
     } catch (\PDOException $e) {
        echo $e->getMessage(). '<br>';
        echo $e->getLine();
     }

  }

}
