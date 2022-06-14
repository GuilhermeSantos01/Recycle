<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <form action="leituraRegistro.php" method="post">
        <label for="usuario">Usuário</label>
        <input type="text" name="usuario" id="usuario"><br>
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha"><br>
        <label for="conSenha">Confirme sua senha</label>
        <input type="password" name="conSenha" id="conSenha"><br>
        <a href="index.php">Logue-se</a><br>
        <input type="submit" name="btnRegistrar" id="btnRegistrar">
    </form>
</body>
</html>