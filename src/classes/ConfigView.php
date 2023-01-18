<?php

namespace Src\Classes;

class ConfigView{

    private $view;
    private $data = [];


    public function chargeView($view, $data = null)
    {
        $this->view = $view;
        $this->data = $data;

        $file_view = DIRREQ."App\\Views\\".$this->view.".php";

        if(file_exists($file_view))
        {
            include_once DIRREQ."App\\Views\\Header.php";
            include_once $file_view;
            include_once DIRREQ."App\\Views\\Footer.php";
        }
    }

}