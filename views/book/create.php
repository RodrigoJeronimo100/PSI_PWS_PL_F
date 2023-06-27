<br>
<br>
<br>

<form action="index.php?c=book&a=store" method="POST">
    <input type="text" name="name" value="<?php if(isset($book)) { echo $book->name; } ?>" placeholder="name">
    <?php if(isset($book->errors)){ echo $book->errors->on('name'); }?>

    <input type="text" name="isbn" value="<?php if(isset($book)) { echo $book->isbn; } ?>" placeholder="ISBN">
    <p><?php
        if(isset($book->errors)) {
            if (is_array($book->errors->on('isbn'))) {
                foreach ($book->errors->on('isbn') as $error) {
                    echo $error . '<br>';
                }
            } else {
                echo $book->errors->on('isbn');
            }
        }
        ?>
    </p>
    <label for="genre_id">Genre:</label><br>
    <select name="genre_id">
        <?php foreach($genres as $genre){?>
            <option value="<?= $genre->id?>"> <?= $genre->name; ?></option>
        <?php } ?>
    </select>

    <input type="submit" value="Criar">
</form>