<?php
$servidor = '127.0.0.1';
$usuario = 'root';
$senha = '';
$banco = "ProjetoPWII";

//i indica que está usando a versão recente
$conn = mysqli_connect($servidor, $usuario, $senha, $banco);//tem que ser nessa ordem
//tratamento de caracteres
$sql = "SET NAMES 'UTF8'";
mysqli_query($conn, $sql);
$sql = 'SET character_set_connection=utf8';
mysqli_query($conn, $sql);
$sql = 'SET character_set_client=utf8';
mysqli_query($conn, $sql);
$sql = 'SET character_set_results=utf8';
mysqli_query($conn, $sql);

if(mysqli_connect_error($conn)){
    echo ("Erro na conexão: " .mysqli_connect_error());
    die();
    
}
?>