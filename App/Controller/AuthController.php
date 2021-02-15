<?php

require_once ('../Models/Global.php');

use App\Service\AuthService;

class AuthController
{
  private $conexao;
  private $authService;

  public function __construct(GlobalFunction $conexao)
  {
    $this->conexao = $conexao->conexao();
  }

  public function login(AuthService $service) 
  {
    $this->authService = $service->login();
  }

}


$global = new GlobalFunction();
$auth = new AuthController($global);

$service = new AuthService();
$auth->login($service);