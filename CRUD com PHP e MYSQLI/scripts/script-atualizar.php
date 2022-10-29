<?php session_start();

require_once('dbconectar.php');
require_once('../funcoes/funcao-filtro.php');

if(!$_POST['btenviar']){
    $_SESSION['msg'] = 'Escolha um cadastro para atualizar!';
    header('location:../tela-listarcad.php');
    exit;
}

$id=limparstring($_POST['iduser']);
$nome=limparstring($_POST['name']);
$sql="UPDATE tbuser SET nomeuser = '$nome' WHERE iduser = $id";
mysqli_query($conn,$sql);


$_SESSION['msg'] = 'Cadastro atualizado com sucesso!';
header('location:../tela-listarcad.php');

