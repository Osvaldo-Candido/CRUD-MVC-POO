<?php
namespace Src\Traits;

trait TraitParseUrl{

    public function parseUrl()
    {
        return explode('/',$_GET['url'],FILTER_SANITIZE_URL);
    }
}