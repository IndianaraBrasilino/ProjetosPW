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

    
  
</body>
</html>