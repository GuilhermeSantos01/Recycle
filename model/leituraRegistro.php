<?php
session_start();
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $usuario = isset($_POST['RegUsuario']) ? $_POST['RegUsuario'] : null;
        $senha = isset($_POST['RegSenha']) ? $_POST['RegSenha'] : null;
        $conSenha = isset($_POST['RegConSenha']) ? $_POST['RegConSenha'] : null;
        if(!is_null($usuario) OR !is_null($senha) OR !is_null($conSenha)){
            if($senha == $conSenha){
                $_SESSION['sUsuario'] = $usuario;
                $_SESSION['sSenha'] = $senha;
                header("Location: /Recycle/visual/login.php");
            }else{
                header("Location: /Recycle/visual/registro.php");
            }
        }else{
            header("Location: /Recycle/visual/registro.php");
        }
    }else{
        header("Location: /Recycle/visual/registro.php");
    }

?>