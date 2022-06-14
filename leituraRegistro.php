<?php
session_start();
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $usuario = isset($_POST['usuario']) ? $_POST['usuario'] : null;
        $senha = isset($_POST['senha']) ? $_POST['senha'] : null;
        $conSenha = isset($_POST['conSenha']) ? $_POST['conSenha'] : null;
        if(!is_null($usuario) OR !is_null($senha) OR !is_null($conSenha)){
            if($senha == $conSenha){
                $_SESSION['sUsuario'] = $usuario;
                $_SESSION['sSenha'] = $senha;
                header("Location: index.php");
            }else{
                header("Location: registro.php");
            }
        }else{
            header("Location: registro.php");
        }
    }else{
        header("Location: registro.php");
    }

?>