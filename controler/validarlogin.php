<?php

session_start();

if(empty($_POST)){
    header("Location: ../");
    die();
}

$user = $_POST['usuario'];
$dbsenha = $_POST['senha'];

if(empty($user)){
    echo 'ErroEmail';
    die();
}
if(empty($dbsenha)){
    echo 'ErroSenha';
    die();
}

include_once '../model/login.php';

?>