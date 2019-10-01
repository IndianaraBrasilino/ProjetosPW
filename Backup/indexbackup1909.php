
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8"><!--Metas para mostrar todos caracteres-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Projeto</title>
</head>
<body>
    <div class="div#corpo-form">
    <form class="div#corpo-form" method="POST" action="controler/validarlogin.php" id="login"><!--action para chamar a pagina-->
        <div class="form-group">
          <h1>Login</h1>
          <input type="text" class="form-control" id="usuariologin" aria-describedby="emailHelp" name="usuario" placeholder="Digite seu nome ou email">
          <!--dar a mensagem de erro, caso o email ou nome esteja incorreto-->
        <div class="invalid-feedback d-none" id="userErro">Por favor, digite seu email ou nome</div>
        </div>
        <div class="form-group">
          <input type="password" class="form-control" id="senhaindex" name="senha" placeholder="Digite sua senha">
          <!--dar a mensagem de erro, caso a senha esteja incorreta-->
        <div class="invalid-feedback d-none" id="passErro">Por favor, digite sua senha</div>
        
        </div>
          <button type="submit" class="btn btn-primary">Entrar</button>
        <div class="invalid-feedback d-none" id="loginErro">Usuário ou senha inválidos.</div>
        
        <div>
          <a href="#">Esqueci minha senha</a>
        </div>

      </form>
    </div>

    <?php
   
        if(isset($_SESSION['erro'])){
            echo "<h1>Senha Incorreta</h1>";
            unset($_SESSION['erro']);
        }
    ?>

    <script src="./css/node_modules/jquery/dist/jquery.js"></script>
    <script src="./css/node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="./css/node_modules/bootstrap/dist/js/bootstrap.js"></script>
    
    <script src="javascript/validacoes.js"></script>

</body>
</html>