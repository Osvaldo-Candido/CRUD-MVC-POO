<?php

namespace App\Libraries;

class Conexao {

   public function abrirConexao()
   {
        $opcoes = [
            \PDO::ATTR_PERSISTENT => true,
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
        ];

        try {
            $conexao = new \PDO("mysql:host=".HOST."; dbname=".DATABASE."","".USER."","".PASSWORD);
            return $conexao;
        } catch (\PDOException $th) {
           print "ERRO = ".$th->getMessage();
           die();
        }

   } 

}