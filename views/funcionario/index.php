<?php $user=$_SESSION['utilizador'];?>
<br>
<br>
<br>
<p>
<table width="100%">
    <tr>
        <td>
            <b><h3><?php switch($_SESSION['role']){
                case 1:
                    echo('ADMINISTRADOR');
                    break;
                        case 2:
                            echo('FUNCIONÁRIO');
                            break;
                        case 3:
                            echo('CLIENTE');
                            break;

            }?></h3></b>
        </td>
    <td>
        <div style="text-align: right">
            <b><?php echo ($user->username); ?></b>
            <a href="index.php?c=funcionario&a=editPassword&id=<?= $user->id ?> " class="btn btn-info"
       role="button">Atualizar Password</a>
            <a href="index.php?c=funcionario&a=editEmail&id=<?= $user->id ?> " class="btn btn-info"
       role="button">Atualizar Email</a>
        </div>
    </td>
    </tr>
</table>
</p>
<hr>
    <div class="col-sm-6">

        <p>
            <?php if($_SESSION['role']!=3){?>
            <a href="index.php?c=folhaobra&a=create" class="btn btn-info"
               role="button">Lançar Folha Obra</a>
            <a href="index.php?c=user&a=index" class="btn btn-info"
               role="button">Gerir Clientes</a>
            <a href="index.php?c=servico&a=index" class="btn btn-info"
               role="button">Serviços</a>
            <a href="index.php?c=iva&a=index" class="btn btn-info"
               role="button">Gerir IVA</a>
                <?php
            } ?>
            <a href="index.php?c=folhaobra&a=index" class="btn btn-info"
               role="button">Histórico Folhas Obra</a>
            <?php if($_SESSION['role']==1){?>
            <p><a href="index.php?c=user&a=index" class="btn btn-warning"
               role="button">Gerir Utilizadores</a>
            <a href="index.php?c=empresa&a=edit&id=<?= $empresa->id ?> " class="btn btn-warning"
               role="button">Editar Dados da Empresa</a></p>

           <?php
            } ?>
        </p>
    </div>
