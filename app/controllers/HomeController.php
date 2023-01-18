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
            $view = new ConfigView();
            $view->chargeView("Home", $dados);   
        
         
    }

    public function viewCadastrar()
    {
        $view = new ConfigView();
        $view->chargeView("Cadastro");
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

            $id = $_POST['id'];
            if(in_array("",$dados)){

                    $_SESSION['msg_erro'] = "Preencha o campo vazio";
                    $view = new ConfigView();
                    $view->chargeView("Cadastro",$dados);

                } else {
                    if($id != ""){
                       
                        $this->editUser($formulario['id'], $dados['nome'],$dados['pais'],$dados['cidade'],$dados['nascimento'], $dados['ideia'], $dados['email']);
                        
                        if($this->getResultado())
                        {
                            header("Location: ".DIRPAGE."home\index");
                        }
                    }else{
                    
                        $this->insertIdea($dados['nome'],$dados['pais'],$dados['cidade'],$dados['nascimento'], $dados['ideia'], $dados['email']);
                        
                        if($this->getResultado())
                        {
                            header("Location: ".DIRPAGE."home\index");
                        }
                    }
                }
      }

   }

   public function editForm()
   {
        if(isset($_POST['id']))
        { $id = $_POST['id']; }

        $dados =  $this->selectEdit($id);
        var_dump($dados);
        $view = new ConfigView();
        $view->chargeView("Cadastro",$dados); 
    }

    public function delete()
    {
        if(isset($_POST['id']))
        { $id = $_POST['id']; }

        $this->deleteUsers($id);

        if($this->getResultado())
        {
            header("Location: ".DIRPAGE."home\index");
        }
    }
}