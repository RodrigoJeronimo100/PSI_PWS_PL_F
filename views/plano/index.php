<br>
<br>
<br>
<form action="index.php?c=plano&a=show" method="post">
    <label for="credito"><b>Crédito:</b></label>
    <input type="text" id="credito" name="credito" placeholder="Seu crédito" value=""><br><br>
    <label for="numprest"><b>Nº de Prestações:</b></label>
    <input type="text" id="numprest" name="prestacao" placeholder="Número de prestações" value=""><br><br>
    <input type="submit" value="Enviar"><br><br>
</form>
<a href="index.php?c=auth&a=logout">Terminar sessão</a>

<?php
if(isset($errors)) {  ?>
    <ul>
        <?php foreach ($errors as $error) { ?>
            <li><?= $error?></li>
        <?php } ?>
    </ul>
<?php } ?>


