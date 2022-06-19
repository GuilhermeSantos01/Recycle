<?php
session_start();
if(!isset($_SESSION['sUsuario']) OR !isset($_SESSION['sSenha'])){
    header("location: /Recycle/visual/login.php"); //Por causa da forma que tá sendo testada
}
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $usuario =  isset($_POST['usuario']) ? $_POST['usuario'] : null;
    $senha = isset($_POST['senha']) ? $_POST['senha'] : null;
    if(is_null($usuario) OR is_null($senha)){
        header("Location: /Recycle/visual/login.php");
    }else{
        if($usuario == $_SESSION['sUsuario'] AND $senha == $_SESSION['sSenha']){
            header("Location: /Recycle/visual/home.php");
        }else{
            header("Location: /Recycle/visual/login.php");
        }
    }

}else{
    header("Location: /Recycle/visual/login.php");
}


?>