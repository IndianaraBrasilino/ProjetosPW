<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body class="body">
    <div class="container">
        <div class="content first-content">
            <div class="first-column">
                <h2 class="title title-primary">Já é cliente?</h2>
                <p class="description description-primary">Faça o login</p>
                <button id="signin" class="btnindex btn-bemvindo">Logar</button>
            </div>    
            <div class="second-column">
                <h2 class="title title-second">CADASTRA-SE</h2>
                <form class="form div#corpo-form">
                    <label class="label-input" for="">
                        <i class="far fa-user icon-modify"></i>
                        <input type="text" placeholder="Digite seu Nome">
                    </label>
                    <label class="label-input" for="">
                        <i class="far fa-user icon-modify"></i>
                        <input type="text" placeholder="Digite seu Login">
                    </label>
                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email" placeholder="E-mail">
                    </label>
                    <label class="label-input" for="">
                        <i class="far fa-user icon-modify"></i>
                        <input type="text" placeholder="Digite seu CPF">
                    </label>
                    <label class="label-input" for="">
                        <i class="far fa-user icon-modify"></i>
                        <input type="text" placeholder="Telefone Fixo">
                        <input type="text" placeholder="Telefone Celular">
                    </label>
                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" placeholder="Senha">
                    </label>
                    
                    
                    <button type="submit" class="btnindex btn-second">Cadastrar</button>        
                </form>
            </div><!-- second column -->
        </div><!-- first content -->
        <div class="content second-content">
            <div class="first-column">
                <h2 class="title title-primary">Não tem cadastro?</h2>
                <p class="description description-primary">Crie uma conta</p>
                <button id="signup" class="btnindex btn-bemvindo">Criar</button>
            </div>
            <div class="second-column">
                <h2 class="title title-second">Seja bem Vindo!</h2>
                <p class="description description-second">Realize seu login para continuar</p>
                <br>
                <form class="form" method="POST" action="controler/validarlogin.php" id="login">
                    <div class="form-group">
                        <label class="label-input" for="">
                            <i class="far fa-envelope icon-modify"></i>
                            <input type="text" class="form-control" id="usuariologin" name="usuario" placeholder="Digite seu login ou e-mail">
                        </label>
                        <div class="invalid-feedback d-none" id="userErro">Por favor, digite seu email ou nome</div>
                    </div>
                    <div class="form-group">
                        <label class="label-input" for="">
                            <i class="fas fa-lock icon-modify"></i>
                            <input type="password" class="form-control" id="senhaindex" name="senha" placeholder="Digite sua senha">
                        </label>
                        <div class="invalid-feedback d-none" id="passErro">Por favor, digite sua senha</div>
                    </div>
                    <a class="password" href="#">Esqueceu sua senha?</a>
                    <button type="submit" class="btnindex btn-second">Entrar</button>
                    <br>
                    <div class="invalid-feedback d-none" id="loginErro">Usuário ou senha inválidos.</div>
                </form>
            </div><!-- second column -->
        </div><!-- second-content -->
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
    <script src="javascript/app.js"></script>
</body>
</html>