<?php 
namespace Src\Classes;
use Src\Traits\TraitParseUrl;

class ConfigController {

    

    public function getUrl()
    {
            $urlArray = $this->parseUrl();
    }
}