<?php

use App\Libraries\Conexao;

include_once "../Src/vendor/autoload.php";
include_once "../config/Config.php";

$rout = new \App\Dispatch;
$cone = new Conexao;
var_dump($cone->abrirConexao());
