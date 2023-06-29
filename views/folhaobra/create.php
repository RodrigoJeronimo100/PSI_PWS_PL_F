<br>
<br>
<br>
    <h2 class="text-left top-space"></h2>
    <h2 class="top-space"></h2>
    <div class="row">
        <div class="col-sm-12">
            <table class="table tablestriped">
                <thead><th><h3>Empresa</h3></th><th><h3>Email</h3></th><th><h3>NºTEL</h3>
                </th><th><h3>NIF</h3></th></th><th><h3>Morada</h3></th><th><t3>Código Postal</t3></th><th><t3>Localidade</t3></th>
                <th><t3>Capital Social</t3></th></thead>
                <tbody>
                <tr>
                    <td><?=$empresa->designacao_social?></td>
                    <td><?=$empresa->email?></td>
                    <td><?=$empresa->telefone?></td>
                    <td><?=$empresa->num_fiscal?></td>
                    <td><?=$empresa->morada?></td>
                    <td><?=$empresa->codigo_postal?></td>
                    <td><?=$empresa->localidade?></td>
                    <td><?=$empresa->capital_social?></td>
                    <td>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

    </div>

<br>
<br>
<br>

<form action="index.php?c=folhaobra&a=store" method="POST">
    <p><b>Cliente: </b><select name="id_cliente">
            <?php foreach($clientes as $cliente){?>
                        <?php if ($cliente->role==3){?>
                <option value="<?= $cliente->id?>"> <?= $cliente->username; ?></option>
                        <?php } ?>
            <?php } ?>
        </select></p>

    <input type="hidden" name="estado" value="1">
    <input type="hidden" name="id_funcionario" value="<?php echo($_SESSION['utilizador']->id)?>">

    <br>
    <br>
    <p><input type="submit" value="Lançar Folha de Obra"></p>


</form>
<a href="index.php?c=folhaobra&a=index">Voltar</a>