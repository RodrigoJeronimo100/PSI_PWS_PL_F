<br>
<br>
<br>
<h2 class="text-left top-space"></h2>
<h2 class="top-space"></h2>
<div class="row">
    <div class="col-sm-12">
        <table class="table tablestriped"><thead><th><h3>Id</h3></th><th><h3>Percentagem(%)</h3></th><th><h3>Descrição</h3></th><th><h3>Vigor</thead>
            <tbody>
            <?php foreach ($iva as $iva) {?>
                <tr>
                    <td><?=$iva->id?></td>
                    <td><?=$iva->percentagem?></td>
                    <td><?=$iva->descricao?></td>
                    <td><input type="checkbox" onclick="return false" <?php if ($iva->vigor=='sim') {
                        echo ('checked');
                        }
                        ?>></td>
                    <td>
                        <a href="index.php?c=iva&a=show&id=<?=$iva->id ?>"
                           class="btn btn-info" role="button">Show</a>
                        <a href="index.php?c=iva&a=edit&id=<?=$iva->id ?>"
                           class="btn btn-warning" role="button">Edit</a>
                        <a href="index.php?c=iva&a=delete&id=<?=$iva->id ?>"
                           class="btn btn-danger" role="button">Delete</a>
                    </td>
                </tr>
                <?php
            } ?>
            </tbody>
        </table>
    </div>
    <div class="col-sm-6">
        <h3>Criar Iva</h3>
        <p>
            <a href="index.php?c=iva&a=create" class="btn btn-success"
               role="button">Criar</a>
        </p>
    </div>
</div>

<a href="index.php?c=funcionario&a=index">Voltar</a>
