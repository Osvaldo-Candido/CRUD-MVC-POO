<?php
namespace App;
use Src\Classes\Routes;
use Src\Traits\TraitParseUrl;

class Dispatch extends Routes {

    use TraitParseUrl;
    private $object;
    private $method;
    private $parameters = [];


    public function getParam(){ return $this->parameters; }
    public function setParam($parameter){ $this->parameters = $parameter;}

    public function __construct()
    {
        $this::addController();
    } 

    public function addController()
    {
        $classController = "\\App\\Controllers\\".$this->getUrl();
        $this->object = new $classController;

        if(isset($this->parseUrl()[1]))
        {
            if(method_exists($this->object, $this->parseUrl()[1]))
            {
                    $this->method = $this->parseUrl()[1];
                    $this->addParamters();
                    call_user_func_array([$this->object, $this->method], $this->getParam());
            }
        }
    }

    public function addParamters()
    {
        $paraCount = count($this->parseUrl());
        if($paraCount > 2)
        {

                foreach($this->parseUrl() as $key => $value)
                {
                    if($key > 1)
                    {
                        $this->setParam($this->parameters += [$key => $value]);
                    }
                   
                }
        }
    }
}