<?php
namespace App\Controllers;

use App\Modells\Users;
use Src\Classes\ConfigView;

class HomeController extends Users {

    public function __construct()
    {
        $dados = $this->selectUsers();
        $view = new ConfigView("Home", $dados);
        $view->chargeView();            
    }

}