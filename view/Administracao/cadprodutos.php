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

<!--Inclusão da navbar na pagina-->
  <?php
    include "../cabecalhos/navADM.php";
  ?>
  <br>
  <!--Formulário de cadastro de produtos-->
    <div class="mt-5">
        <div class="w-50 h-100 mx-auto bg-white">
            <h1 class="text-center text-muted">Cadastro de Produtos</h1>
            <form action="" method="POST" id="cadprod">
                <div class="form-row col-10 mx-auto mt-5">
                    <label class="lead col-4" for="">Nome</label>
                    <input class="form-control col-8" type="text" placeholder="Digite o nome do produto" name="prod" id="nomeprod">                    
                </div>
                <div class="form-row col-10 mx-auto mt-3 mb-5">
                    <label class="lead col-4" for="">Descrição</label>
                    <input class="form-control col-8" type="text" placeholder="Digite a descrição do produto" name="descprod" id="descprod">
                </div>
                <div class="form-row col-10 mx-auto mt-2 mb-5">
                    <label class="lead col-4" for="">Valor</label>
                    <input class="form-control col-8" type="text" placeholder="R$" name="precprod" id="precprod">
                </div>
                <div class="form-row col-10 mx-auto mb-5">
                    <label class="lead col-4" for="">Estoque</label>
                    <input class="form-control col-8" type="text" placeholder="Quantidade no estoque" name="qtdeprod" id="qtdeprod">
                </div>
                <div class="form-row col-10 mx-auto mb-5">
                    <label class="lead col-4" for="">Foto</label>
                    <input class="form-control col-8" type="text" placeholder="Endereço da Foto" name="fotoprod" id="fotoprod">
                </div>
                <div class="form-row col-10 mx-auto mt-5 mb-5">
                    <input class="form-control btn-primary col-5 mx-auto" type="submit" value="Cadastrar">
                </div>
            </form>
        </div>
    </div>
</body>
</html>