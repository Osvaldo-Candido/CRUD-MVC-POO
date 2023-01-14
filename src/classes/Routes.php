<?php 
namespace Src\Classes;
use Src\Traits\TraitParseUrl;

class Routes {

    use TraitParseUrl;
    private $controller;

    public function getUrl()
    {       
            $urlArray = $this->parseUrl();
            $I = $urlArray[0];

            $controllers = [
                "home" => "HomeController",
                "" => "HomeController"
            ];

            if(array_key_exists($I, $controllers)){
               if(file_exists(DIRREQ.'App/Controllers/'.$controllers[$I].'.php'))
               {
                    return $controllers[$I];
               }
            }else {
                return "ErroController";
            }

           // var_dump($controller);
    }
}