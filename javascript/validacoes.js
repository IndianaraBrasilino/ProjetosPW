$(function(){
    //pega o id do form e submete o formulário e cria um objeto com todos dados do formulário
    $('#login').submit(function(){
        var obj = this;
        var form = $(obj);
        var dados = new FormData(obj);

        $.ajax({
            url: form.attr('action'),
            type: form.attr('method'),
            data: dados,
            processData: false,
            cache: false,
            contentType: false,
            success: (data) => {//a variavel data recebe os dados do php
                if(data == "ErroEmail"){
                    var titulo = document.getElementById("usuariologin");
                    //troca o className do formulário para ficar com a borda vermelha
                    titulo.className = "form-control is-invalid";
                    var exibirErro = document.getElementById("userErro");
                    //para surgir a mensagem de erro embaixo do campo
                    exibirErro.className = "invalid-feedback d-block";
                    //dá um foco na caixa que deu erro
                    titulo.focus();
                }
                else{
                    var titulo = document.getElementById("usuariologin");
                    titulo.className = "form-control";
                    var exibirErro = document.getElementById("userErro");
                    exibirErro.className = "invalid-feedback d-none";
                }
                if(data == "ErroSenha"){
                    var titulo = document.getElementById("senhaindex");
                    titulo.className = "form-control is-invalid";
                    var exibirErro = document.getElementById("passErro");
                    exibirErro.className = "invalid-feedback d-block";
                    titulo.focus();
                }
                else{
                    var titulo = document.getElementById("senhaindex");
                    titulo.className = "form-control";
                    var exibirErro = document.getElementById("passErro");
                    exibirErro.className = "invalid-feedback d-none";
                }
                if(data == "FalhaLogin"){
                    var titulo = document.getElementById("loginErro");
                    titulo.className = "invalid-feedback d-block";
                }
                else{
                    var titulo = document.getElementById("loginErro");
                    titulo.className = "invalid-feedback d-none";
                }
                if(data == "SucessoCliente"){
                    window.location.replace("view/Home/");
                }
                if(data == "SucessoADM"){
                    window.location.replace("view/Administracao/");
                }

            },//sucess
        });//ajax
        //requisição asicrona
        return false;
    });//function de dentro
});//function de fora