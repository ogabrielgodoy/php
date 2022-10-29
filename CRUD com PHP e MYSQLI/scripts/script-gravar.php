<?php

session_start();
require_once('dbconectar.php');
require_once('../funcoes/funcao-filtro.php');

if(!$_POST['btenviar']){
    $_SESSION['msg'] = 'Informe um nome para cadastrar';
    header('location:../tela-cad.php');
    exit;
}

$name= limparstring($_POST['name']);
$sql="INSERT INTO `tbuser` (`nomeuser`) VALUES ('$name')";
mysqli_query($conn,$sql);

$_SESSION['msg'] = 'Cadastrado com sucesso!';
header('location:../tela-cad.php');