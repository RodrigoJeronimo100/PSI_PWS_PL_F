<br>
<br>
<br>
<h2 class="text-left top-space"></h2>
<h2 class="top-space"></h2>
<div class="row">
    <div class="col-sm-12">
        <table class="table tablestriped"><thead><th><h3>NºObra</h3></th><th><h3>Nome</h3></th><th><h3>Cliente</h3>
            </th><th><h3>Quantidade</h3>
            </th><th><h3>Ações</h3></th></thead>
            <tbody>
            <?php foreach ($book as $book) { ?>
                <tr>
                    <td><?=$book->id?></td>
                    <td><?=$book->name?></td>
                    <td><?=$book->isbn?></td>
                    <td><?=$book->genre->name?></td>
                    <td>
                        <a href="index.php?c=chapter&a=index&id=<?=$book->id ?>"
                           class="btn btn-info" role="button">Quantidades</a>
                        <a href="index.php?c=book&a=show&id=<?=$book->id ?>"
                           class="btn btn-info" role="button">Show</a>
                        <a href="index.php?c=book&a=edit&id=<?=$book->id ?>"
                           class="btn btn-info" role="button">Edit</a>
                        <a href="index.php?c=book&a=delete&id=<?=$book->id ?>"
                           class="btn btn-warning" role="button">Delete</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="col-sm-6">
        <h3>Criar Folha de Obra</h3>
        <p>
            <a href="index.php?c=empresa&a=create" class="btn btn-info"
               role="button">Criar</a>
        </p>
    </div>
</div>

