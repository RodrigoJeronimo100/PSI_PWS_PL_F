<br>
<br>
<br>
<h2 class="text-left top-space"></h2>
<h2 class="top-space"></h2>
<div class="row">
    <div class="col-sm-12">
        <table class="table tablestriped"><thead><th><h3>Id</h3></th><th><h3>Data</h3></th><th><h3>Funcionario</h3></th><th><h3>Cliente</h3></th><th><h3>Valor Total</h3></th><th><h3>Iva Total</h3></th><th><h3>Estado</h3></th>
            <tbody>
            <?php foreach ($folhaobras as $folhaobra) {
                    if(($folhaobra->estado == 2 && $_SESSION['role'] == 2) ||
                        $_SESSION['role'] == 1 ||
                        ($_SESSION['role'] == 3 && $folhaobra->cliente->id == $_SESSION['utilizador']->id)) { ?>
                <tr>
                    <td><?=$folhaobra->id?></td>
                    <td><?=$folhaobra->data?></td>
                    <td><?=$folhaobra->funcionario->username?></td>
                    <td><?=$folhaobra->cliente->username?></td>
                    <td><?=$folhaobra->valor_total?></td>
                    <td><?=$folhaobra->iva_total?></td>
                    <td>
                        <?php
                        switch ($folhaobra->estado) {
                            case 1:
                                echo('Em lançamento');
                                break;
                            case 2:
                                echo('Emitida');
                                break;
                            case 3:
                                echo('Paga');
                                break;
                            case 4:
                                echo('Anulada');
                                break;

                        }

                        ?></td>
                    <td>
                        <a href="index.php?c=folhaobra&a=show&id=<?=$folhaobra->id ?>"
                           class="btn btn-info" role="button">Show</a>
                        <?php if($folhaobra->estado == 1 && $_SESSION['role'] != 3) { ?>
                        <a href="index.php?c=linhaobra&a=index_id&id=<?=$folhaobra->id ?>"
                           class="btn btn-warning" role="button">Edit</a>
                            <?php if ($folhaobra->estado != 4) { ?>
                        <a href="index.php?c=folhaobra&a=delete&id=<?=$folhaobra->id ?>"
                           class="btn btn-danger" role="button">Delete</a>
                                <?php } ?>
                            <?php } ?>
                    </td>
                </tr>
                <?php
                    }
            } ?>
            </tbody>
        </table>
    </div>
    <div class="col-sm-6">
        <h3>Criar Folha de Obra</h3>
        <p>
            <a href="index.php?c=folhaobra&a=create" class="btn btn-success"
               role="button">Criar</a>
        </p>
    </div>
</div>
<a href="index.php?c=funcionario&a=index">Voltar</a>
