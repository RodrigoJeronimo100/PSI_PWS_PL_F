<br>
<br>
<br>

<form action="index.php?c=folha&a=update&id=<?= $book->id ?>" method="POST">
    <input type="text" name="name" value="<?php if(isset($book)) { echo $book->name; } ?>" placeholder="name">
    <?php if(isset($book->errors)){ echo $book->errors->on('name'); }?>

    <input type="text" name="isbn" value="<?php if(isset($book)) { echo $book->isbn; } ?>" placeholder="ISBN">
    <?php if(isset($book->errors)){ echo $book->errors->on('isbn'); }?>

    <label for="genres">Genre:</label><br>
    <select name="genre_id">
        <?php foreach($genres as $genre){?>
            <?php if($genre->id == $book->genre_id) { ?>
                <option value="<?= $genre->id?>" selected><?= $genre->name;
                    ?> </option>
            <?php }else { ?>
                <option value="<?= $genre->id?>"> <?= $genre->name;
                    ?></option>
            <?php }
        } ?>
    </select>

    <input type="submit" value="Confirmar">

</form>


