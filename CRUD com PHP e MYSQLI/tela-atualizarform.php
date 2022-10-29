<?php
session_start();

require_once('scripts/dbconectar.php');
require_once('funcoes/funcao-filtro.php');

$id=limparstring($_POST['iduser']);

$sql="SELECT * FROM tbuser WHERE iduser = $id";
$resultado=mysqli_query($conn,$sql);

$result=mysqli_fetch_array($resultado);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php - Atualizar</title>
</head>
<body>

<h1>Cadastrar</h1>
    
<?php
    if(isset($_SESSION['msg'])){ echo $_SESSION['msg']; unset($_SESSION['msg']); }
    ?>

<br><br> 
    <form action="scripts/script-atualizar.php" method="post">
        <input type="hidden" value="<?php echo $id; ?>" name="iduser">
        <input type="text" value="<?php echo $result['nomeuser'] ?>" name="name" placeholder="Digite um nome" required>
        <input type="submit" name="btenviar" value="Atualizar">
    </form>

    <?php require_once('menu.php'); ?>

</body>
</html>