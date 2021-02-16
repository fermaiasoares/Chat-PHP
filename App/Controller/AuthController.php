<?php

require_once ('../Models/Global.php');
require_once '../Service/AuthService.php';

use App\Service\AuthService;

class AuthController
{
  private $conexao;
  private $authService;

  public function __construct(GlobalFunction $conexao)
  {
    $this->conexao = $conexao->conexao();
  }

  public function login(AuthService $service, $email, $password) 
  {
    $this->authService = $service->login($email, $password);
    
  }

}


$global = new GlobalFunction();
$auth = new AuthController($global);

$service = new AuthService($global);
$auth->login($service, $_POST['email'], $_POST['password']);