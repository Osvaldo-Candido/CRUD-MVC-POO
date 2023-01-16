<?php
namespace App\Controllers;

use App\Modells\Users;
use Src\Classes\ConfigView;
use Src\Traits\TraitParseUrl;

class HomeController extends Users {

    use TraitParseUrl;

    public function index()
    {
  
            $dados = $this->selectUsers();
            $view = new ConfigView("Home", $dados);
            $view->chargeView();   
        
         
    }

    public function viewCadastrar()
    {
        
        $dados = $this->selectUsers();
        $view = new ConfigView("Cadastro");
        $view->chargeView();
    }

    public function dataForm()
    {
        $formulario = filter_input_array(INPUT_POST,FILTER_DEFAULT);

        if(isset($formulario))
        {
            $dados = [
                'nome' => trim($formulario['nome']),
                'pais' => trim($formulario['pais']),
                'cidade' => trim($formulario['cidade']),
                'nascimento' => trim($formulario['nascimento']),
                'email' => trim($formulario['email']),
                'ideia' => trim($formulario['ideia'])
            ];
            if(in_array("",$dados)){

                    $_SESSION['msg_erro'] = "Preencha o campo vazio";
                    $view = new ConfigView("Cadastro",$dados);
                    $view->chargeView();

                } else {
            
                    $this->insertIdea($dados['nome'],$dados['pais'],$dados['cidade'],$dados['nascimento'], $dados['ideia'], $dados['email']);
                    
                    if($this->getResultado())
                    {
                        header("Location: ".DIRPAGE."home\index");
                    }
                }
      }



      
   }
}