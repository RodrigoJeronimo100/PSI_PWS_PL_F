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


<h2 class="text-left top-space"></h2>
<h2 class="top-space"></h2>
<h3>Folha de Obra N.º <?= $_SESSION['folhaobra']->id ?></h3>
<div class="row">
    <div class="col-sm-12">
        <table class="table tablestriped">
            <thead><th><h3>Id</h3></th><th><h3>Quantidade</h3></th>
            </thead>
            <tbody>
            <?php foreach ($linhaobras as $linhaobra) {?>
               <?php if ($linhaobra->id_folha_obra == $_SESSION['folhaobra']->id) { ?>
                <tr>
                    <td><?=$linhaobra->id?></td>
                    <td><?=$linhaobra->quantidade?></td>
                </tr>
                   <?php } ?>
                <?php
            } ?>
            </tbody>
        </table>
    </div>
    <div class="col-sm-6">
        <p>
            <a href="index.php?c=linhaobra&a=create" class="btn btn-success"
               role="button">Adicionar Linha de Obra</a>
        </p>
    </div>

        <p>
            <a href="index.php?c=folhaobra&a=emit" class="btn btn-warning"
               role="button">Emitir Folha de Obra</a>
        </p>
    </div>
<a href="index.php?c=funcionario&a=index">Voltar</a>
