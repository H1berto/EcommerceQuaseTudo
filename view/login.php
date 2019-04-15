<?php
	include_once('../includes/headerLogin.php');
	include_once('../app/controllers/UsuarioDAO.php');
	$logado=$_SESSION['logado'];
?>
<html>
	<head>
		<Title> Login </title>
		<link href="..\assets\css\estilo.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link rel="shortcut icon" href="..\imagens\favicon.ico" type="image/x-icon" />
		<meta charset="UTF-8">
		<style>
			.container {

				width: 100vw;
				height: 50vh;
				display: flex;
				flex-direction: row;
				justify-content: center;
				align-items: center
			}

			.box {

				width: 300px;
				height: 200px;
				background: #87CEEB;
			}

			body {
				margin: 0px;
			}

			input {
				margin: 5px 0;
				width: 100%;
			}

			.box a {
				text-decoration: underline;
				color: purple;
			}

			h3 {
				text-align: center;
				color: red;
			}
		</style>
	</head>
	<body>
		<header>
			
	<header>
		 <div class="topo">
            <div>
                <img id="img_topo" src="../imagens/11697.jpg" >
            </div>
            <div>
                <h1 id="titulo">MINI MERCADO QUASE TUDO</h1>
                <h2 id="subtitulo">Aqui você economiza de verdade!!</h2>
            </div>
        </div>

        <br>
		<div class="nav_bar">
			<table class="nav_content"  border=1 bgcolor=#ffcc00 cellpadding=0 cellspacing= 0 width=100% >
				<tr>
					<th class="nav_item"> <a href="index.html">Inicio</a> </th>
					<th class="nav_item"> <a href="promocoes.php">Promoções</a> </th>
					<th class="nav_item"> <a href="produtos.php">Produtos</a> </th>
					<th class="nav_item"> <a href="carrinho.php">🛒 Carrinho</a></th>
					<th class="nav_item"> <a href="login.php">Login</a> </th>
				</tr>
			</table>
		</div>
	</header>
		</header>
		<main>
			<h2>Login</h2>
	<?php
		if ($logado == false) {	
			//verifica se não existe uma variavel post para logar
			if (isset($_POST['logar'])) {
				//crio um objeto da classe controller UsuarioDAO
				$dao = new UsuarioDAO;
				//faço a chamada da função login da controller 
				$result = $dao->login($_POST);
			}
	?>		
			<div class="container">
				<div class="box">
					<form action="login.php" method="post">
						<br>
						Email ou CPF:<input type="text" name="email">
						Senha:<input type="password" name="senha"><br>
						<a href="#">Esqueci Minha Senha<a><br><br><br>
						<input type="submit" name="logar" value="Entrar">
					</form>
				</div>
			</div>
	<?php
		}else{
	?>
			<h1>Logado!<h1>
			<form  action="login.php" method="post">
				<input style="width:100px ;" type="submit" name="sair" value="Sair">
			</form>

	<?php
		} 
	?>
		</main>
	</body>
</html>