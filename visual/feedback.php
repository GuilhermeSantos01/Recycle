 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>feedback</title>
	 <link rel="stylesheet" href="style.css">
 </head>
 <body class="body-feedback">
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
			<li class="nav-item"><a href="situacao.php" class="nav-link">Situação do lixo</a></li>
                    <li class="nav-item"><a href="reciclar.php" class="nav-link">Aprenda a reciclar</a></li>
                    <li class="nav-item"><a href="tabela.php" class="nav-link">Quanto ganhar?</a></li>
                    <li class="nav-item"><a href="feedback.php" class="nav-link">Fale conosco</a></li>	
            </ul>
            <div class="apoie-button">
                <button><a href="#">Apoie-nos</a></button>
            </div>
        </div>
    </header>
     <div class="conteudo">
        <h2>Nos ajude a melhorar dando sua opinião</h2>
        <form>
            <label>Nome:</label>
            <input type="text" required>
            <br><br>
            <label>Comentário:</label>
            <textarea></textarea>
            <br><br>
            <button class="btnEnviar">Enviar</button>
        </form>
     </div>
     
 </body>
 </html>
