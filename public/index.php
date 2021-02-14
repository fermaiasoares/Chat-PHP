<?php 

require_once 'vendor/autoload.php';

use App\Controller\Route;

$path = require_once 'views/auth/index.php';

$route = new Route($path);