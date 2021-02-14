<?php

require_once ('../Models/Global.php');



class Auth
{
  private $conexao;

  public function __construct(GlobalFunction $conexao)
  {
    $this->conexao = $conexao->conexao();
  }

}


$global = new GlobalFunction();
$auth = new Auth($global);
