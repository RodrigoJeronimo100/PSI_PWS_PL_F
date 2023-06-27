<br>
<br>
<br>



<form action="index.php?c=chapter&a=update" method="POST">
    <input type="text" name="name" placeholder="Name" value="<?= $chapter->name?>">
    <input type="hidden" name="book_id" value="<?= $chapter->book_id ?>">
    <input type="submit" value="Criar">
</form>
