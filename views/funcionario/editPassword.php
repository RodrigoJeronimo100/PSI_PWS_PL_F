<br>
<br>
<br>


<form action="index.php?c=user&a=updateDados&id=<?= $users->id ?>" method="POST">

    <p><b>Password: </b><input type="password" name="password" value="<?php if(isset($users)) { echo $users->password; } ?>" placeholder="password">
        <?php if(isset($users->errors)){ echo $users->errors->on('password'); }?></p>
    <input type="submit" value="Confirmar">

</form>