<?php

require_once 'Global.php';

class Auth
{
  private $conexao_global;

  public function __construct (FunctionGlobal $conexao_global)
  {
      $this->conexao_global = $conexao_global;
  }

  public function openDb()
  {
    $connect = $this->conexao_global->conexao("localhost", "chat", "diego", "root@123");
    return $connect;
  }

}


$global = new FunctionGlobal();

$auth = new Auth($global);
$auth->openDb();
