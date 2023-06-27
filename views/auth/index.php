<!doctype html>
<html lang="en" class="h-100" data-bs-theme="auto">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="Rodrigo 0.111.3">
    <title><?= APP_NAME ?></title>
    <link href="public/css/login.css" type="text/css" rel="stylesheet">


</head>
<body>
<div class="form-container">
    <div class="form-box">
            <img src="public/img/logo.png" class="logo" alt="Logo">
        <form action="index.php?c=auth&a=login" method="post">
            <label for="utilizador"><b>Utilizador:</b></label>
            <input type="text" id="utilizador" name="utilizador" size="50" class="form-control" placeholder="Introduza o nome de utilizador..." value=""><br><br>
            <label for="senha"><b>Password:</b></label>
            <input type="password" id="senha" size="50" name="senha" class="form-control" placeholder="Introduza a password..." value=""><br><br>
            <input type="submit" value="Iniciar Sessão"><br><br>
        </form>
    </div>
</div>
<style>
    .logo {
        display: block;
        width: 100px;
        height: auto;
        margin: -10px auto 0;
    }
</style>
</body>




