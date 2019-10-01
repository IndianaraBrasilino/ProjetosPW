<?php

include_once 'conexao.php';

//echo $user;
//echo $dbsenha;

//preparar o SQL
$sql = $conn->prepare("SELECT * FROM TB_Pessoa WHERE (email = ? OR userName = ?) AND senha = ? AND ativo = 'ativo'");

$sql->bind_param("sss", $user, $user, $dbsenha);//entre "" o tipo da variavel//substitui a ? com os dados que usuário digitou

$sql->execute();//executa o script

$resultado = $sql->get_result();//recebe o resultado do sql
$linha = $resultado->fetch_assoc();//matriz associativa, cria um array onde cada linha associando cada item a um indice do array

$sql -> close();//fecha a instrução
$conn -> close();//fecha a conexão

if(empty($linha)){
    echo "FalhaLogin";
    die();//para o script
}
else{
    //variavel de sessão, pega os dados do banco e atribui na variavel de sessão
    $_SESSION['idPessoa'] = $linha['idPessoa'];//associado ao banco de dados
    $_SESSION['login'] = true;
    $_SESSION['nome'] = $linha['nome'];
    $_SESSION['tipo'] = $linha['tipo'];

    switch($linha['tipo']){
        case "administrador":
        echo "SucessoADM";
        break;
        case "cliente":
        echo "SucessoCliente";
        break;
        default:
        echo "FalhaLogin";
        die();
    }
}
?>