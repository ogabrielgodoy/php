<?php

require_once('pass.php');

$hostname= $_ENV['hostname'];
$username= $_ENV['username'];
$password= $_ENV['password'];
$dbnome= $_ENV['dbnome'];

$conn=mysqli_connect($hostname,$username,$password,$dbnome);

if(!$conn){
    echo "Erro na conexão com o banco de dados!";
}