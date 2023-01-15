<?php

namespace Src\Classes;

class ConfigView{

    private $view;
    private $data = [];

    public function __construct($view, array $data = null)
    {
            $this->view = $view;
            $this->data = $data;
    } 

    public function chargeView()
    {
        $file_view = DIRREQ."App\\Views\\".$this->view.".php";

        if(file_exists($file_view))
        {
            include_once DIRREQ."App\\Views\\Header.php";
            include_once $file_view;
            include_once DIRREQ."App\\Views\\Footer.php";
        }
    }

}