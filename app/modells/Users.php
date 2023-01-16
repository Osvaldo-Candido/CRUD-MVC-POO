<?php
namespace App\Modells;
use App\Libraries\Persistencia;

class Users extends Persistencia {

    private $resultado = false;

    public function getResultado()
    {
        return $this->resultado;
    }

    public function selectUsers()
    {
            $this->query("SELECT * FROM users");
            return $this->results();
    }

    public function insertIdea(string $nome, string $pais, string $cidade, $nascimento, string $ideia, string $email)
    {
        $query = "INSERT INTO users (id, nome, pais, cidade, nascimento, ideia, data_inscricao, data_modif, email)
                  VALUES(null,:nome, :pais, :cidade, :nascimento, :ideia, NOW(),null, :email)";

        $this->query($query);
        $this->bind(':nome',$nome);
        $this->bind(':pais',$pais);
        $this->bind(':cidade',$cidade);
        $this->bind(':nascimento',$nascimento);
        $this->bind(':ideia',$ideia);
        $this->bind(':email',$email);

        if($this->execute())
        {
            $this->resultado = true;
        }

    }

}