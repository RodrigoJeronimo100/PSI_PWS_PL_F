<br>
<br>
<br>
<br>
<br>

<form action="index.php?c=chapter&a=store" method="POST">
    <input type="text" name="name" placeholder="Name">
    <input type="hidden" name="book_id" value="<?= $id ?>">
    <input type="submit" value="Criar">
</form>