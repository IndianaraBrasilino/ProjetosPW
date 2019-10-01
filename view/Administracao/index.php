<?php

session_start();
if(!isset($_SESSION['login']) || $_SESSION['login'] !=true){
  header("Location: ../../");
}
//caso o administrador queira acessar a tela do cliente, volta para a tela do administrador
switch($_SESSION['tipo']){
  case "cliente":
    header("Location: ../Home");
    break;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../../css/estilo.css">
    <title>Tela ADM</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
  <div class="container">
      <a class="navbar-brand h1 mb-0" href="#">Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
      <span class="navbar-toggler-icon"></span>
      </button>
  <div class="collapse navbar-collapse" id="navbarSite">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Funcionários</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Clientes</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Produtos</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Vendas</a>
      </li>
    </ul>
      <form class="form-inline">
        <input class="form-control ml-5 mr-2" type="search" placeholder="O que procura?"><!--ml-2 classe de espacamento-->
        <button class="btn btn-warning" type="Submit">Buscar</button>
      </form>
</div>
</nav>
    
</body>
</html>