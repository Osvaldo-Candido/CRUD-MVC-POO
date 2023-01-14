<?php
namespace App\Controllers;
use Src\Classes\ConfigView;

class HomeController{

    public function __construct()
    {
        $view = new ConfigView("Home");
        $view->chargeView();            
    }

}