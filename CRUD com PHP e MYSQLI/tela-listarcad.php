<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php - Listar</title>
</head>
<body>

<h1>Lista de cadastro</h1>

<?php
    if(isset($_SESSION['msg'])){ echo $_SESSION['msg']; unset($_SESSION['msg']); }
    ?>

<br><br>

<table border="1px">
  <tr>
    <td>ID</td>
    <td>Nome</td>
    <td></td>
    <td></td>
  </tr>

<?php 
require_once('scripts/dbconectar.php');
$sql = "SELECT * FROM tbuser";
$resultado=mysqli_query($conn,$sql);

foreach($resultado as $result){
?>
  <tr>
    <td><?php echo $result['iduser']; ?></td>
    <td><?php echo $result['nomeuser']; ?></td>
    <td>
        <form action="tela-atualizarform.php" method="post">
            <input type="hidden" value="<?php echo $result['iduser'] ?>" name="iduser">
            <input class="bt-atualizar" type="submit" name="btenviar" value="Atualizar">
        </form>
    </td>
    <td>
        <form action="scripts/script-excluir.php" method="post">
            <input type="hidden" value="<?php echo $result['iduser'] ?>" name="iduser">
            <input class="bt-excluir" type="submit" name="btenviar" value="Excluir">
        </form>
    </td>
  </tr>
<?php } ?>
</table>


<?php require_once('menu.php'); ?>

</body>
</html>