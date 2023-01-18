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

    public function selectEdit($id)
    {
        $query = "SELECT * FROM users WHERE id = :id LIMIT 1";
        $this->query($query);
        $this->bind(":id",$id);

        if($this->result())
        {
           return $resultados = $this->result();
        }
    }

    public function editUser(int $id, string $nome, string $pais, string $cidade, $nascimento, string $ideia, string $email)
    {
        $query = "UPDATE  users SET  nome = :nome, pais = :pais, cidade = :cidade, nascimento = :nascimento, ideia = :ideia, data_modif = NOW(), email = :email
                  WHERE id = :id";

            $this->query($query);
            $this->bind(':id',$id);
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

    public function deleteUsers($id)
    {
        $query = "DELETE FROM users WHERE id = :id";

        $this->query($query);
        $this->bind(':id',$id);

        if($this->execute())
        {
        $this->resultado = true;
        }
    }

}