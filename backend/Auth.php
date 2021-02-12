<?php

require_once ('Global.php');


class Auth
{
  private $conexao;

  public function __construct(GlobalFunction $conexao)
  {
    $this->conexao = $conexao->conexao('localhost', 'chat', 'diego', 'root@123');
  }

}


$global = new GlobalFunction();
$auth = new Auth($global);
