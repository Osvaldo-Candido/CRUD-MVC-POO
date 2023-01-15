<?php
namespace App\Modells;
use App\Libraries\Persistencia;

class Users extends Persistencia {

    public function selectUsers()
    {
            $this->query("SELECT * FROM users");
            return $this->results();
    }

}