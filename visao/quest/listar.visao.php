<h2>Listar todas questões</h2>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Pergunta</th>
            <th>Resposta 1</th>
            <th>Resposta 2</th>
            <th>Resposta 3</th>
            <th>Resposta 4</th>
            <th>Resposta Correta</th>
            <th>VIEW</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
    </thead>
    <?php foreach ($quest as $quest): ?>
    <tr>
        <td><?=$quest['id']?></td>
        <td><?=$quest['quest']?></td>
        <td><?=$quest['r1']?></td>
        <td><?=$quest['r2']?></td>
        <td><?=$quest['r3']?></td>
        <td><?=$quest['r4']?></td>
        <td><?=$quest['rcerta']?></td>
        <td><a href="./quest/visualizar/<?=$quest['id']?>" class="btn btn-secondary">view</a></td>
        <td><a href="./quest/editar/<?=$quest['id']?>" class="btn btn-info">edit</a></td>
        <td><a href="./quest/deletar/<?=$quest['id']?>" class="btn btn-danger">del</a></td>
    </tr>
    <?php endforeach; ?>
</table>

<a href="./quest/adicionar" class="btn btn-primary">Adicionar uma nova questão</a>

