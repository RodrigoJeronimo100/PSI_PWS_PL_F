<br>
<br>
<br>
<h2 class="text-left top-space"></h2>
<h2 class="top-space"></h2>
<div class="row">
    <div class="col-sm-12">
        <table class="table tablestriped"><thead><th><h3>Id</h3></th><th><h3>Referência</h3></th><th><h3>Descrição</h3></th><th><h3>Preço/Hora(€)</h3></th><th><h3>Percentagem de Iva(%)</h3></th>
            <th><h3>Descrição de Iva</h3></th></thead>
            <tbody>
            <?php foreach ($servico as $servico) {?>
                <tr>
                    <td><?=$servico->id?></td>
                    <td><?=$servico->referencia?></td>
                    <td><?=$servico->descricao?></td>
                    <td><?=$servico->preco_hora?></td>
                    <td><?=$servico->iva->percentagem?></td>
                    <td><?=$servico->iva->descricao?></td>
                    <td>
                        <a href="index.php?c=servico&a=show&id=<?=$servico->id ?>"
                           class="btn btn-info" role="button">Show</a>
                        <a href="index.php?c=servico&a=edit&id=<?=$servico->id ?>"
                           class="btn btn-warning" role="button">Edit</a>
                        <a href="index.php?c=servico&a=delete&id=<?=$servico->id ?>"
                           class="btn btn-danger" role="button">Delete</a>
                    </td>
                </tr>
                <?php
            } ?>
            </tbody>
        </table>
    </div>
    <div class="col-sm-6">
        <h3>Criar Serviço</h3>
        <p>
            <a href="index.php?c=servico&a=create" class="btn btn-success"
               role="button">Criar</a>
        </p>
    </div>
</div>
<a href="index.php?c=funcionario&a=index">Voltar</a>
