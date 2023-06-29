<br>
<br>
<br>


<form action="index.php?c=user&a=updateDados&id=<?= $users->id ?>" method="POST">

    <p><b>Email: </b><input type="text" name="email" value="<?php if(isset($users)) { echo $users->email; } ?>" placeholder="email">
        <?php if(isset($users->errors)){ echo $users->errors->on('email'); }?></p>
    <input type="submit" value="Confirmar">

</form>



