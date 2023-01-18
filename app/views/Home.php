
    
<div class="quadro-de-ideias">
    <h3>Ideias de como tornar o mundo um lugar melhor</h3>
    <table class="tabela">

        <thead>
            <tr>
             <td>ID</td>
             <td>Nome</td>
             <td>País</td>
             <td>Email</td>
             <td>Cidade</td>
             <td>Idade</td>
             <td>Ideia</td>
             <td>Inscricao</td>
             <td>Modificao</td>
             <td>Acções</td>
            </tr>
        </thead>
        <tbody>
        <?php foreach($this->data as $data) { ?>
        <tr>
             <td><?= $data->id ?></td>
             <td><?= $data->nome ?></td>
             <td><?= $data->pais ?></td>
             <td><?= $data->email ?></td>
             <td><?= $data->cidade ?></td>
             <td><?= $data->nascimento ?></td>
             <td><?= $data->ideia ?></td>
             <td><?= $data->data_inscricao ?></td>
             <td><?= $data->data_modif ?></td>
             <td class="butons">
                <form action="<?=DIRPAGE."home/editForm"?>" method="post">
                    <input type="hidden" name="id" value="<?= $data->id ?>">
                    <button class="btn-edit" type="submit">Editar</button>    
                </form>
                <form action="<?=DIRPAGE."home/delete"?>" method="post">
                    <input type="hidden" name="id" value="<?= $data->id ?>">
                    <button class="btn-elim" type="submit">Eliminar</a></button>    
                </form>
                
            </td>
             
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>