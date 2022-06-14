<?php
session_start();
if(!isset($_SESSION['sUsuario']) AND !isset($_SESSION['sSenha'])){
    header("Location: index.php");
}else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <p>Olá, <?php echo $_SESSION['sUsuario']; ?>, ajax funcionando perfeitamente </p>
</body>
</html>

<?php 

}

?>