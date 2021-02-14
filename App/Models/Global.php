<?php

require_once '../../public/global.php';

class GlobalFunction
{

  public function conexao ()
  {
     try {
        return new PDO("mysql:host=". HOST. "; dbname=". DB, USER, PASSWORD);
     } catch (\PDOException $e) {
        echo $e->getMessage(). '<br>';
        echo $e->getLine();
     }

  }

}
