<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<br>
<br>
<br>


<form action="index.php?c=iva&a=update&id=<?= $iva->id ?>" method="POST">
    <p><b>Percentagem: </b><input type="text" name="percentagem" value="<?php if(isset($iva)) { echo $iva->percentagem; } ?>" placeholder="Percentagem...">
    <?php if(isset($iva->errors)){ echo $iva->errors->on('percentagem'); }?></p>

    <p><b>Descrição: </b><input type="text" name="descricao" value="<?php if(isset($iva)) { echo $iva->descricao; } ?>" placeholder="Descrição...">
    <?php if(isset($iva->errors)){ echo $iva->errors->on('descricao'); }?></p>

    <p><b>Vigor: </b><select name="vigor">
            <option value="sim">sim</option>
            <option value="nao" <?php if($iva->vigor=='nao'){
                echo('selected'); }?>>não</option>
                    </select>
    <?php if(isset($iva->errors)){ echo $iva->errors->on('vigor'); }?></p>


    <input type="submit" value="Confirmar">

</form>


