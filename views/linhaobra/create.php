<br>
<br>
<br>

<form action="index.php?c=linhaobra&a=store" method="POST">
    <p><b>Serviço: </b><select name="id_servico">
            <?php foreach($servicos as $servico){?>
                    <option value="<?= $servico->id?>"> <?= $servico->descricao; ?></option>
            <?php } ?>
        </select></p>

    <p><b>Quantidade: </b><input type="number" min="1" name="quantidade" value="<?php if(isset($linhaobra)) { echo $linhaobra->quantidade; } ?>" placeholder="Quantidade...">
        <?php if(isset($linhaobra->errors)){ echo $linhaobra->errors->on('quantidade'); }?></p>
    <input type="hidden" name="id_folha_obra" value="<?=$_SESSION['folhaobra']->id?>">
    <br>
    <p><input type="submit" value="Adicionar Linha Obra"></p>


</form>