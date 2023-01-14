<?php 

include_once "../Src/vendor/autoload.php";

use Src\Traits\TraitParseUrl;

class teste {

    use TraitParseUrl;

    public function __construct()
    {
        $testar = $this->parseUrl();
        var_dump($testar);
    }

}

$new = new teste();
