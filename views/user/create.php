<br>
<br>
<br>

<form action="index.php?c=user&a=store" method="POST">
    <p><b>Usuário: </b><input type="text" name="username" value="<?php if(isset($users)) { echo $users->username; } ?>" placeholder="Username...">
        <?php if(isset($users->errors)){ echo $users->errors->on('username'); }?></p>

    <p><b>Password: </b><input type="password" name="password" value="<?php if(isset($users)) { echo $users->username; } ?>" placeholder="Password...">
        <?php if(isset($users->errors)){ echo $users->errors->on('password'); }?></p>

    <p><b>Email: </b><input type="text" name="email" value="<?php if(isset($users)) { echo $users->username; } ?>" placeholder="Email...">
        <?php if(isset($users->errors)){ echo $users->errors->on('email'); }?></p>

    <p><b>Nif: </b><input type="text" name="nif" value="<?php if(isset($users)) { echo $users->username; } ?>" placeholder="NIF...">
        <?php if(isset($users->errors)){ echo $users->errors->on('nif'); }?></p>

    <p><b>Telemóvel: </b><input type="text" name="tel" value="<?php if(isset($users)) { echo $users->username; } ?>" placeholder="NºTel...">
        <?php if(isset($users->errors)){ echo $users->errors->on('tel'); }?></p>

    <p><b>Morada: </b><input type="text" name="morada" value="<?php if(isset($users)) { echo $users->username; } ?>" placeholder="Morada...">
        <?php if(isset($users->errors)){ echo $users->errors->on('morada'); }?></p>

    <p><b>Zip Code: </b><input type="text" name="codigo_postal" value="<?php if(isset($users)) { echo $users->username; } ?>" placeholder="Código Postal...">
        <?php if(isset($users->errors)){ echo $users->errors->on('codigo_postal'); }?></p>

    <p><b>Localidade: </b><input type="text" name="localidade" value="<?php if(isset($users)) { echo $users->username; } ?>" placeholder="Localidade...">
        <?php if(isset($users->errors)){ echo $users->errors->on('localidade'); }?></p>
    <input type="hidden" value=<?php echo ('"');echo $usertype; echo('"'); ?> name="role">
    <input type="submit" value="Criar">


</form>