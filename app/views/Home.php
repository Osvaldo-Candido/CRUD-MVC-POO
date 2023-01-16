
    
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
             <td>
                <a href="#"><i class="fa-solid fa-trash"></i></a>
                <a href="#"><i class="fa-solid fa-pen-to-square"></i></a>
            </td>
             
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>