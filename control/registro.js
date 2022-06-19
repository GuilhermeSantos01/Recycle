$(document).ready(function () {
    $("#btnRegistrar").click(function(event){ 
        let RegUsuario = $("#RegUsuario").val();
        let RegSenha = $("#RegSenha").val();
        let RegConSenha = $('#RegConSenha').val();
            if(RegSenha !== RegConSenha){
                event.preventDefault();
                alert("As senhas estão diferentes.");
            }else if(RegUsuario == ""){
                event.preventDefault();
                alert("Preencha o campo de usuário.");
            }else if(RegSenha == "" && RegConSenha == ""){
                event.preventDefault();
                alert("O campo de senhas estão vazios.");
            }
        });
    })

