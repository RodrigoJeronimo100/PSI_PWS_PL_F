<br>
<br>
<br>

<form action="index.php?c=servico&a=store" method="POST">
    <p><b>Referência: </b><input type="text" name="referencia" value="<?php if(isset($servicos)) { echo $servicos->referencia; } ?>" placeholder="Referência...">
        <?php if(isset($servicos->errors)){ echo $servicos->errors->on('referencia'); }?></p>

    <p><b>Descrição: </b><input type="text" name="descricao" value="<?php if(isset($servicos)) { echo $servicos->descricao; } ?>" placeholder="Descrição...">
        <?php if(isset($servicos->errors)){ echo $servicos->errors->on('descricao'); }?></p>

    <p><b>Preço/Hora: </b><input type="text" name="preco_hora" value="<?php if(isset($servicos)) { echo $servicos->preco_hora; } ?>" placeholder="Preço/Hora...">
        <?php if(isset($servicos->errors)){ echo $servicos->errors->on('preco_hora'); }?></p>

    <label for="id_iva"><b>Iva:</b></label>
    <select name="id_iva">
        <?php foreach($iva as $iva){?>
            <option value="<?= $iva->id?>"> <?= $iva->descricao; ?></option>
        <?php } ?>
    </select>
    <br>

    <br>
    <p><input type="submit" value="Criar"></p>


</form>