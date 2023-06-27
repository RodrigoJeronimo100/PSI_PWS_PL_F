<br>
<br>
<br>
<p>
<table width="100%">
    <tr>
        <td>
            <b><h3><?php if($_SESSION['role']==1){
                    echo('ADMINISTRADOR');
                 }
                 else{
                    echo('FUNCIONÁRIOS');
            }?></h3></b>
        </td>
    <td>
        <div style="text-align: right">
            <b><?php echo ($_SESSION['utilizador']); ?></b>
            <a href="" class="btn btn-info"
       role="button">Atualizar Password</a>
            <a href="" class="btn btn-info"
       role="button">Atualizar Email</a>
        </div>
    </td>
    </tr>
</table>
</p>
<hr>
    <div class="col-sm-6">

        <p>
            <a href="index.php?c=funcionario&a=create" class="btn btn-info"
               role="button">Emitir Folha Obra</a>
            <?php if($_SESSION['role']==2) { ?>
            <a href="index.php?c=user&a=index" class="btn btn-info"
               role="button">Gerir Clientes</a><?php }?>
            <a href="index.php?c=servico&a=index" class="btn btn-info"
               role="button">Serviços</a>
            <a href="index.php?c=iva&a=index" class="btn btn-info"
               role="button">Gerir IVA</a>
            <a href="index.php?c=funcionariofeatures&a=hfo" class="btn btn-info"
               role="button">Histórico Folhas Obra</a>
            <?php if($_SESSION['role']==1){

             echo ('<p><a href="index.php?c=user&a=index" class="btn btn-warning"
               role="button">Gerir Utilizadores</a>
            <a href="index.php?c=user&a=hfo" class="btn btn-warning"
               role="button">Editar Dados da Empresa</a></p>');

            } ?>
        </p>
    </div>

<form action="index.php?c=funcionario&a=show" method="post">
    <h2 class="text-left top-space"></h2>
    <h2 class="top-space"></h2>
    <div class="row">
        <div class="col-sm-12">
            <table class="table tablestriped"><thead><th><h3>Empresa</h3></th><th><h3>Email</h3></th><th><h3>NºTEL</h3>
                </th><th><h3>NIF</h3></th></th><th><h3>Morada</h3></th><th><t3>Código Postal</t3></th><th><t3>Localidade</t3></th>
                <th><t3>Capital Social</t3></th></thead>
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
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>

    </div>