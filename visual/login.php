

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Recycle/visual/alertify.css">
    <link rel="stylesheet" href="/Recycle/visual/themes/default.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login.css">
 
    <title>Login</title>
</head>
<body class="body-login">
<header>
								<nav class="nav-bar">
	<div class="logo"	>
					<h1><img src="https://static.wixstatic.com/media/d6aefa_2a84d9e6954a4a579f0aeb9ea77bf3b5~mv2.png/v1/fill/w_720,h_720,al_c,q_95/d6aefa_2a84d9e6954a4a579f0aeb9ea77bf3b5~mv2.webp"       class="reci">Recycle</h1>			
	</div>			
			<div class="nav-list">
							<ul>
                            <li class="nav-item"><a href="inicio.php" class="nav-link">Início</a></li>	
							<li class="nav-item"><a href="situacao.html" class="nav-link">Situação do lixo</a></li>	
							<li class="nav-item"><a href="reciclar.php" class="nav-link">Aprenda a reciclar</a></li>	
							<li class="nav-item"><a href="tabela.php" class="nav-link">Quanto ganhar?</a></li>	
									<li class="nav-item"><a href="feedback.php" class="nav-link">Fale conosco</a></li>	
											
		<div class="login-button">
        <button><a href ="login.php">Apoie-nos</a></button>
		</ul>
							</div>
		<div class="mobile-menu-icon">						
<button onclick="menuShow()"><img  src="https://previews.123rf.com/images/fokaspokas/fokaspokas1809/fokaspokas180900164/108564673-hamburger-menu-web-icon-white-icon-with-shadow-on-transparent-background.jpg?fj=1" class="icon"></button>
								
	</div>				
					
	<div class="mobile-menu">
					<ul>
					<li class="nav-item"><a href="inicio.html" class="nav-link">Início</a></li>	
							<li class="nav-item"><a href="situacao.html" class="nav-link">Situação do lixo</a></li>	
							<li class="nav-item"><a href="recicla.html" class="nav-link">Aprenda a reciclar</a></li>	
								<li class="nav-item"><a href="ganho.html" class="nav-link">Quanto ganhar?</a></li>	
									<li class="nav-item"><a href="interacao.html" class="nav-link">Fale conosco</a></li>	
									
		</ul>
					<div class="login-button">
					<button><a href="apoie.html">Apoie-nos</a></button>
					
	</div>
	
</div>	
</div>
			</nav>
			</header>

    <div class="main">  	
		<input class="input" type="checkbox" id="chk" aria-hidden="true"  name="form" id="form">
			<div class="signup">
				<form action="/Recycle/model/leituraLogin.php"  name="form" id="form"method="post">
					<label for="chk" aria-hidden="true" class="label">Login</label>
					<input class="input" type="text" name="usuario" id="usuario" placeholder="Usuario"/>
					<input class="input" type="password"name="senha" id="senha" placeholder="Senhas"/>
					<button name="btnLogin" id="btnLogin" value="login">Criar conta</button>
                    <div class="mensagem">
                    Não tem conta? <a href="registro.php">Registre-se </a>
    </div>
				</form>
			</div>

</div>
</div>

    <script src="/Recycle/control/a.js"></script>
    <script src="/Recycle/control/alertify.js"></script>
</div>
</body>
</html>

