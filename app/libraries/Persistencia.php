<?php
namespace App\Libraries;
use App\Libraries\Conexao;

class Persistencia extends Conexao {

    private $bindParam;

    public function query($query)
    {
        $this->bindParam = $this->abrirConexao()->prepare($query);
    }

    public function bind($parameter,$value,$type=null)
    {
            if(is_null($type))
            {
                switch(true)
                {
                    case is_int($value):
                        $type = \PDO::PARAM_INT;
                        break;
                    case is_bool($value):
                        $type = \PDO::PARAM_BOOL;
                        break;
                    default:
                        $type = \PDO::PARAM_STR;
                        break;
                }
            }

           $this->bindParam->bindValue($parameter,$value,$type);

    }

    public function execute()
    {
        return $this->bindParam->execute();
    }

    public function result()
    {
        $this->execute();
        return $this->bindParam->fetch(\PDO::FETCH_ASSOC);
    }

    public function results()
    {
        $this->execute();
        return $this->bindParam->fetchAll(\PDO::FETCH_OBJ);
    }

}