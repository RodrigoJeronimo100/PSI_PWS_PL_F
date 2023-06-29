<br>
<br>
<br>


<form action="index.php?c=empresa&a=update&id=<?= $empresa->id ?>" method="POST">
    <p><b>Empresa: </b><input type="text" name="designacao_social" value="<?php if(isset($empresa)) { echo $empresa->designacao_social; } ?>" placeholder="designação social...">
        <?php if(isset($empresa->errors)){ echo $empresa->errors->on('designacao_social'); }?></p>

    <p><b>Email: </b><input type="text" name="email" value="<?php if(isset($empresa)) { echo $empresa->email; } ?>" placeholder="email...">
        <?php if(isset($empresa->errors)){ echo $empresa->errors->on('email'); }?></p>

    <p><b>Telefone: </b><input type="text" name="telefone" value="<?php if(isset($empresa)) { echo $empresa->telefone; } ?>" placeholder="tel...">
        <?php if(isset($empresa->errors)){ echo $empresa->errors->on('telefone'); }?></p>

    <p><b>Nif: </b><input type="text" name="num_fiscal" value="<?php if(isset($empresa)) { echo $empresa->num_fiscal; } ?>" placeholder="nif...">
        <?php if(isset($empresa->errors)){ echo $empresa->errors->on('num_fiscal'); }?></p>

    <p><b>Morada: </b><input type="text" name="morada" value="<?php if(isset($empresa)) { echo $empresa->morada; } ?>" placeholder="morada...">
        <?php if(isset($empresa->errors)){ echo $empresa->errors->on('morada'); }?></p>

    <p><b>Zip Code: </b><input type="text" name="codigo_postal" value="<?php if(isset($empresa)) { echo $empresa->codigo_postal; } ?>" placeholder="codigo postal...">
        <?php if(isset($empresa->errors)){ echo $empresa->errors->on('codigo_postal'); }?></p>

    <p><b>Localidade: </b><input type="text" name="localidade" value="<?php if(isset($empresa)) { echo $empresa->localidade; } ?>" placeholder="localidade...">
        <?php if(isset($empresa->errors)){ echo $empresa->errors->on('localidade'); }?></p>

    <p><b>Capital Social: </b><input type="text" name="capital_social" value="<?php if(isset($empresa)) { echo $empresa->capital_social; } ?>" placeholder="capital social...">
        <?php if(isset($empresa->errors)){ echo $empresa->errors->on('capital_social'); }?></p>

    <input type="submit" value="Confirmar">

</form>


