<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php - Gravar Db</title>
</head>
<body>
    <h1>Gravar no banco de dados</h1>

    <?php
    if(isset($_SESSION['msg'])){ echo $_SESSION['msg']; unset($_SESSION['msg']); }
    ?>

<br><br> 
    <form action="script.php" method="post">
        <input type="text" name="name" placeholder="Digite um nome" required>
        <input type="submit" name="btenviar" value="Cadastrar">
    </form>
    
</body>
</html>