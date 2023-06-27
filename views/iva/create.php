<br>
<br>
<br>

<form action="index.php?c=iva&a=store" method="POST">
    <p><b>Percentagem: </b><input type="text" name="percentagem" value="<?php if(isset($iva)) { echo $iva->percentagem; } ?>" placeholder="Percentagem...">
        <?php if(isset($iva->errors)){ echo $iva->errors->on('percentagem'); }?></p>

    <p><b>Descrição: </b><input type="text" name="descricao" value="<?php if(isset($iva)) { echo $iva->descricao; } ?>" placeholder="Descrição...">
        <?php if(isset($iva->errors)){ echo $iva->errors->on('descricao'); }?></p>

    <p><b>Vigor: </b><select name="vigor">
            <option value="sim">sim</option>
            <option value="nao">não</option>
        </select>
        <?php if(isset($iva->errors)){ echo $iva->errors->on('vigor'); }?></p>
    
    <input type="submit" value="Criar">


</form>