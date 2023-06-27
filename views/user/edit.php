<br>
<br>
<br>


<form action="index.php?c=user&a=update&id=<?= $users->id ?>" method="POST">
    <p><b>Usuário: </b><input type="text" name="username" value="<?php if(isset($users)) { echo $users->username; } ?>" placeholder="username">
    <?php if(isset($users->errors)){ echo $users->errors->on('username'); }?></p>

    <p><b>Password: </b><input type="password" name="password" value="<?php if(isset($users)) { echo $users->password; } ?>" placeholder="password">
    <?php if(isset($users->errors)){ echo $users->errors->on('password'); }?></p>

    <p><b>Email: </b><input type="text" name="email" value="<?php if(isset($users)) { echo $users->email; } ?>" placeholder="email">
    <?php if(isset($users->errors)){ echo $users->errors->on('email'); }?></p>

    <p><b>Nif: </b><input type="text" name="nif" value="<?php if(isset($users)) { echo $users->nif; } ?>" placeholder="nif">
    <?php if(isset($users->errors)){ echo $users->errors->on('nif'); }?></p>

    <p><b>Telemóvel: </b><input type="text" name="tel" value="<?php if(isset($users)) { echo $users->tel; } ?>" placeholder="tel">
    <?php if(isset($users->errors)){ echo $users->errors->on('tel'); }?></p>

    <p><b>Morada: </b><input type="text" name="morada" value="<?php if(isset($users)) { echo $users->morada; } ?>" placeholder="morada">
    <?php if(isset($users->errors)){ echo $users->errors->on('morada'); }?></p>

    <p><b>Zip Code: </b><input type="text" name="codigo_postal" value="<?php if(isset($users)) { echo $users->codigo_postal; } ?>" placeholder="codigo_postal">
    <?php if(isset($users->errors)){ echo $users->errors->on('codigo_postal'); }?></p>

    <p><b>Localidade: </b><input type="text" name="localidade" value="<?php if(isset($users)) { echo $users->localidade; } ?>" placeholder="localidade">
    <?php if(isset($users->errors)){ echo $users->errors->on('localidade'); }?></p>

    <input type="submit" value="Confirmar">

</form>


