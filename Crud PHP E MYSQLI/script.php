<?php

session_start();
require_once('dbconectar.php');

if(!$_POST['btenviar']){
    $_SESSION['msg'] = 'Informe um nome para cadastrar';
    header('location:index.php');
    exit;
}

$filtro=filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
$name=strip_tags($filtro['name']);

echo $name;

$sql="INSERT INTO `tbuser` (`nomeuser`) VALUES ('$name')";
mysqli_query($conn,$sql);

$_SESSION['msg'] = 'Cadastrado com sucesso!';
header('location:index.php');