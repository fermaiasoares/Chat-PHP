<?php 

namespace App\Service;

use GlobalFunction;

require_once ('../Models/Global.php');

class AuthService 
{
    private $pdo;

    public function __construct(GlobalFunction $pdo)
    {
        $this->pdo = $pdo->conexao();
    }

    public function login($email, $password) 
    {
        try {

            $email = $email ? filter_var($email, FILTER_SANITIZE_STRING) : null;
            $password = $password ? filter_var($password, FILTER_SANITIZE_STRING) : null;

            if(isset($password) && isset($email)) {
                $query = "SELECT id, Password, Token, Secure FROM User WHERE (Email LIKE ? OR Username LIKE ?) AND Password = ? LIMIT 1" ;
                $stmt = $this->pdo->query($query);
                return $stmt;
            }      

        } catch (\Exception $e) {
           echo $e->getMessage(). '<br>';
           echo $e->getLine(). '<br>';
           echo $e->getCode();
        }

    }

}