<br>
<br>
<br>
<h2 class="text-left top-space"></h2>
<h2 class="top-space"></h2>
<div class="row">
    <div class="col-sm-12">
        <table class="table tablestriped"><thead><th><h3>Empresa</h3></th><th><h3>Email</h3></th><th><h3>NºTEL</h3>
            </th><th><h3>NIF</h3></th></th><th><h3>Morada</h3></th><th><t3>Código Postal</t3></th><th><t3>Localidade</t3></th>
            <th><t3>Capital Social(€)</t3></th></thead>
            <tbody>
            <?php foreach ($empresa as $empresa) { ?>
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
                        <a href="index.php?c=chapter&a=index&id=<?=$empresa->id ?>"
                           class="btn btn-info" role="button">Quantidades</a>
                        <a href="index.php?c=empresa&a=show&id=<?=$empresa->id ?>"
                           class="btn btn-info" role="button">Show</a>
                        <a href="index.php?c=empresa&a=edit&id=<?=$empresa->id ?>"
                           class="btn btn-info" role="button">Edit</a>
                        <a href="index.php?c=empresa&a=delete&id=<?=$empresa->id ?>"
                           class="btn btn-warning" role="button">Delete</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
    <p>Olá
    <?php
    echo ($_SESSION['utilizador']);
    //$_SESSION['role']= $user->role;
    ?>
    </p>
    <div class="col-sm-6">
        <h3>Criar Folha de Obra</h3>
        <p>
            <a href="index.php?c=empresa&a=create" class="btn btn-info"
               role="button">Criar</a>
        </p>
    </div>
</div>
