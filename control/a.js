$(document).ready(function () {
    $("#btnLogin").on('click', function () { 
        let usuario = $("#usuario").val();
        let senha = $("#senha").val();

        let dados = $("#form").serialize();
        if(usuario == "" || senha == ""){
            alert("Campos não podem estar vazíos");
            console.log(usuario + senha);
        }
        
        $.ajax({
            type: "POST",
            url: "/Recycle/model/leituraLogin.php",
            data: dados,
            success: function (response) {
                document.write(response);
            },
            
            
            dataType: 'text',
            async: false
        });
    })
});

