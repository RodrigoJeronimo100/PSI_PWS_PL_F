<br>
<br>
<br>
<h2 class="text-left top-space"></h2>
<h2 class="top-space"></h2>
<div class="row">
    <div class="col-sm-12">
        <?php if($_SESSION['role']==1){


        ?>
        <h2><b>Funcionários</b></h2>
        <table class="table tablestriped"><thead><th><h3>Id</h3></th><th><h3>Usuário</h3></th><th><h3>Email</h3></th><th><h3>NIF</h3></th><th><h3>NºTel</h3></th><th><h3>Morada</h3>
            </th><th><h3>Zip Code</h3></th><th><h3>Localidade</h3></th></thead>
            <tbody>
            <?php foreach ($users as $user) {
                if($user->role== 2){?>
                    <tr>
                        <td><?=$user->id?></td>
                        <td><?=$user->username?></td>
                        <td><?=$user->email?></td>
                        <td><?=$user->nif?></td>
                        <td><?=$user->tel?></td>
                        <td><?=$user->morada?></td>
                        <td><?=$user->codigo_postal?></td>
                        <td><?=$user->localidade?></td>
                        <td>
                            <a href="index.php?c=user&a=show&id=<?=$user->id ?>"
                               class="btn btn-info" role="button">Show</a>
                            <a href="index.php?c=user&a=edit&id=<?=$user->id ?>"
                               class="btn btn-warning" role="button">Edit</a>
                            <a href="index.php?c=user&a=delete&id=<?=$user->id ?>"
                               class="btn btn-danger" role="button">Delete</a>
                        </td>
                    </tr>
                <?php }
            } ?>

            </tbody>
        </table>
            <div class="col-sm-6">
                <h4>Criar Funcionário</h4>
                <p>
                    <a href="index.php?c=user&a=createfunc" class="btn btn-success"
                       role="button">Criar</a>
                </p>
            </div>
            <hr>
        <?php
        }
        ?>
        <h2><b>Clientes</b></h2>
        <table class="table tablestriped"><thead><th><h3>Id</h3></th><th><h3>Usuário</h3></th><th><h3>Email</h3></th><th><h3>NIF</h3></th><th><h3>NºTel</h3></th><th><h3>Morada</h3>
            </th><th><h3>Zip Code</h3></th><th><h3>Localidade</h3></th></thead>
            <tbody>
            <?php foreach ($users as $user) {
                if($user->role== 3){?>
                <tr>
                    <td><?=$user->id?></td>
                    <td><?=$user->username?></td>
                    <td><?=$user->email?></td>
                    <td><?=$user->nif?></td>
                    <td><?=$user->tel?></td>
                    <td><?=$user->morada?></td>
                    <td><?=$user->codigo_postal?></td>
                    <td><?=$user->localidade?></td>
                    <td>
                        <a href="index.php?c=user&a=show&id=<?=$user->id ?>"
                           class="btn btn-info" role="button">Show</a>
                        <a href="index.php?c=user&a=edit&id=<?=$user->id ?>"
                           class="btn btn-warning" role="button">Edit</a>
                        <a href="index.php?c=user&a=delete&id=<?=$user->id ?>"
                           class="btn btn-danger" role="button">Delete</a>
                    </td>
                </tr>
            <?php }
                    } ?>
            </tbody>
        </table>
    </div>
    <div class="col-sm-6">
        <h3>Criar Cliente</h3>
        <p>
            <a href="index.php?c=user&a=create" class="btn btn-success"
               role="button">Criar</a>
        </p>
    </div>
</div>
<a href="index.php?c=funcionario&a=index">Voltar</a>
