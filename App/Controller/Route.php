<?php 

namespace App\Controller;

class Route 
{
    public function __construct($path)
    {
       if(isset($path) && !empty($path)) {
           return require_once $path;
       }
       return false;
    }
}