<?php 

require_once 'vendor/autoload.php';

use App\Controller\RouteController;

$path = require_once 'views/auth/index.php';

$route = new RouteController($path);