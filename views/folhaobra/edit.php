<br>
<br>
<br>

Textos completos
id
data
valor_total
iva_total
estado
id_cliente
id_funcionario

<form action="index.php?c=folhaobra&a=update&id=<?= $folhaobras->id ?>" method="POST">
    <p><b>Valor Total: </b><input type="text" name="referencia" value="<?php if(isset($folhaobras)) { echo $folhaobras->data; } ?>" placeholder="Data...">
    <?php if(isset($folhaobras->errors)){ echo $folhaobras->errors->on('data'); }?></p>

    <p><b>Descrição: </b><input type="text" name="descricao" value="<?php if(isset($folhaobras)) { echo $folhaobras->descricao; } ?>" placeholder="Descrição...">
    <?php if(isset($folhaobras->errors)){ echo $folhaobras->errors->on('descricao'); }?></p>

    <p><b>Preço/Hora: </b><input type="text" name="preco_hora" value="<?php if(isset($folhaobras)) { echo $folhaobras->preco_hora; } ?>" placeholder="Preço/Hora...">
    <?php if(isset($folhaobras->errors)){ echo $folhaobras->errors->on('preco_hora'); }?></p>


    <input type="submit" value="Confirmar">

</form>


