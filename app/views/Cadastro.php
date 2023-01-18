<form class="cadastro" action="<?=DIRPAGE.'home\dataForm'?>" method="post">
<?php if(isset($_SESSION['msg_erro'])){ ?>
                <?php echo $_SESSION['msg_erro'];  ?>
<?php } ?>
    <div class="full-box">
        <input class="inp-l" type="hidden" name="id"  value="<?php if(isset($this->data['id'])){ echo $this->data['id']; } ?>">
    </div>
    <div class="full-box">
        <label class="lb" for="nome">Nome</label>
        <input class="inp-l" type="text" name="nome" placeholder="Insira o seu nome" value="<?php if(isset($this->data['nome'])){ echo $this->data['nome']; } ?>">
    </div>
    <div class="full-box">
        <label class="lb" for="pais">País</label>
        <input class="inp-l" type="text" name="pais" placeholder="Insira o seu país" value="<?php if(isset($this->data['pais'])){ echo $this->data['pais']; } ?>">
    </div>
    <div class="full-box">
        <label class="lb" for="cidade">Cidade</label>
        <input class="inp-l" type="text" name="cidade" placeholder="Insira a sua cidade" value="<?php if(isset($this->data['cidade'])){ echo $this->data['cidade']; } ?>">
    </div>
    <div class="half-box">
        <label class="lb" for="nascimento">Nascimento</label>
        <input class="inp-l" type="date" name="nascimento" value="<?php if(isset($this->data['nascimento'])){ echo $this->data['nascimento']; } ?>">
    </div>
    <div class="full-box">
        <label class="lb" for="email">Email</label>
        <input class="inp-l" type="email" name="email" placeholder="Insira o seu email" value="<?php if(isset($this->data['email'])){ echo $this->data['email']; } ?>">
    </div>
    <div class="full-box">
        <label class="lb" for="nome">Como melhorar o mundo</label>
       <textarea name="ideia" id="" cols="55" rows="8" value=""><?php if(isset($this->data['ideia'])){ echo $this->data['ideia']; } ?></textarea>
    </div>
    <div cílass="full-box">
        <input class="inp-l" type="submit" value="Enviar">
    </div>
</form>
