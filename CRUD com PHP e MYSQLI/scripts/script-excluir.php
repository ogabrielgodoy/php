<?php session_start();

require_once('dbconectar.php');
require_once('../funcoes/funcao-filtro.php');

if(!$_POST['btenviar']){
    $_SESSION['msg'] = 'Escolha um cadastro para excluir!';
    header('location:../tela-listarcad.php');
    exit;
}

$id=limparstring($_POST['iduser']);
$sql="DELETE FROM tbuser WHERE iduser = $id";
mysqli_query($conn,$sql);


$_SESSION['msg'] = 'Cadastro excluido com sucesso!';
header('location:../tela-listarcad.php');

