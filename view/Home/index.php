<?php

session_start();
if(!isset($_SESSION['login']) || $_SESSION['login'] !=true){
  header("Location: ../../");
}
//caso o cliente queira acessar a tela do administrador, volta para a tela do cliente

switch($_SESSION['tipo']){
  case "administrador":
    header("Location: ../Administracao");
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
    <title>Tela Cliente</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary"><!--navbar-expand-lg deixa a navbar extendida somente no tamanho lg os demais encolhe-->
      <div class="container">
        <a class="navbar-brand h1 mb-0" href="#">Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarSite"><!--o id é o mesmo do data-target do button-->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">Meu perfil</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Minhas Compras</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Meu Carrinho</a>
            </li>
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item active">
            <!--Saudação ao usuário-->
              <?php
                $nome = explode(" ", $_SESSION['nome']);
                //separa as strings por um parametro pré-determinado
                echo "<a href='#' class='nav-link text-white'>Olá ".$nome[0]."</a>";
              ?>
            </li>
            </ul>
          <form class="form-inline">
            <input class="form-control ml-5 mr-2" type="search" placeholder="O que procura?"><!--ml-2 classe de espacamento-->
            <button class="btn btn-warning" type="Submit">Buscar</button>
            <button class="btn btn-warning" type="Submit">Sair</button>
          </form>
    </div>
    </div>
  </nav>
  <div id="carouselsite" class="carousel slide" data-ride="carousel">
    <!--Coloca o indicador embaixo das imagens no carousel-->
      <ol class="carousel-indicators">
        <li data-target="#carouselsite" data-slide-to="0" class="active"></li>
        <li data-target="#carouselsite" data-slide-to="1"></li>
        <li data-target="#carouselsite" data-slide-to="2"></li>

      </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../../imagens/banner1.jpg" class="img-fluid d-block">
      </div>
      <div class="carousel-item">
        <img src="../../imagens/banner2.jpg" class="img-fluid d-block">
      </div>
      <div class="carousel-item">
        <img src="../../imagens/banner3.jpg" class="img-fluid d-block">
      </div>
    </div>
    <!--Inserir as setas no carrosel de retorno e avançar-->
      <a class="carousel-control-prev" href="#carouselsite" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        <span class="sr-only">anterior</span>
      </a>
      <a class="carousel-control-next" href="#carouselsite" role="button" data-slide="next">
        <span class="carousel-control-next-icon"></span>
        <span class="sr-only">avancar</span>
      </a>
  </div>
  <br>
  <br>
  <!--Inicio dos cards-->
  
  <div class="container my-5">
        <div class="row mb-5">
            <?php
                include "../../model/produtomodel.php";
                buscarProdutos();
            ?>
        </div>
    </div>


    <script src="../../css/node_modules/jquery/dist/jquery.js"></script>
    <script src="../../css/node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="../../css/node_modules/bootstrap/dist/js/bootstrap.js"></script>
    
</body>
</html>