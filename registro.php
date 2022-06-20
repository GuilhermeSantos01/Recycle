<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/Recycle/control/alertify.js"></script>
    <link rel="stylesheet" href="/Recycle/visual/alertify.css">
    <link rel="stylesheet" href="/Recycle/visual/themes/default.css">
    <link rel="stylesheet" href="style.css">

</head>
<body class="body-registro">
<header>
        <nav class="nav-bar">
            <div class="logo">
                <img src="https://static.wixstatic.com/media/d6aefa_2a84d9e6954a4a579f0aeb9ea77bf3b5~mv2.png/v1/fill/w_720,h_720,al_c,q_95/d6aefa_2a84d9e6954a4a579f0aeb9ea77bf3b5~mv2.webp"
                    class="reci">
                <h1>Recycle</h1>
            </div>
            <div class="nav-list">
                <ul>
				<li class="nav-item"><a href="inicio.php" class="nav-link">Início</a></li>
                    <li class="nav-item"><a href="situacao.php" class="nav-link">Situação do lixo</a></li>
                    <li class="nav-item"><a href="reciclar.php" class="nav-link">Aprenda a reciclar</a></li>
                    <li class="nav-item"><a href="tabela.php" class="nav-link">Quanto ganhar?</a></li>
                    <li class="nav-item"><a href="feedback.php" class="nav-link">Fale conosco</a></li>	
                </ul>
            </div>
            <div class="apoie-button">
			<button><a href="login.php">Apoie-nos</a></button>
            </div>
            <div class="mobile-menu-icon">
                <button onclick="menuShow()"><img src=" https://i.stack.imgur.com/rYaai.png" class="icon"></button>
            </div>
        </nav>
        <div class="mobile-menu">
            <ul>
                <li class="nav-item"><a href="#" class="nav-link">Início</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Situação do lixo</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Aprenda a reciclar</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Quanto ganhar?</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Fale conosco</a></li>
            </ul>
            <div class="apoie-button">
                <button><a href="#">Apoie-nos</a></button>
            </div>
        </div>
    </header>

        <div class="main">  	
		<input class="input" type="checkbox" id="chk" aria-hidden="true"  name="form" id="form" class="inpu">
			<div class="signup">
				<form action="/Recycle/model/leituraRegistro.php"  name="form" id="form"method="post">
					<label for="chk" aria-hidden="true" class="label">Registre-se</label>
					<input class="input" type="text" name="RegUsuario" id="RegUsuario" placeholder="Usuario"/>
					<input class="input" type="password"name="RegSenha" id="RegSenha" placeholder="Senha"/>
                    <input class="input" type="password" name="RegConSenha" id="RegConSenha" placeholder="Confirmar Senha">
					<button name="btnRegistrar" id="btnRegistrar" value="login">Criar conta</button>
                    <div class="mensagemRegistro">
                    Quer voltar a tela de login? <a href="login.php">Login </a>
    </form>

    <script src="/Recycle/control/registro.js"></script>

</body>
</html>