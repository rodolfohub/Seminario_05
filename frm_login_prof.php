<?php
	session_start();
	if (isset($_SESSION['usuariologprof'])) {
		header("Location: portal_prof.php");
		die();
	}

	$_SESSION['usuario'] = $_GET['nome'];
?>	

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tela de Login</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div class="background">
		<div class="topo"></div>
			<div class="container">
				<div class="box">
					<div class="logo">
						<img src="logo.png">
					</div>
					<h1>Portal do Educador</h1>
					<form method="POST" action="valida_login_prof.php">
					<ul>Usuário</ul>	
					<input autofocus type="text" name="nome" 
						placeholder="Digite o nome" href="$_SESSION['usuario'] = ?nome" required/>
					<ul>Senha</ul>
					<input type="password" name="senha" 
						placeholder="Inserir uma senha" required/>
					<ul> </ul>
					<input class="entrar" type="submit" value="Entrar" 
						name="btn_entrar">
					<ul> </ul>
					<li><a href="">Esqueci minha senha</a></li>
				</div>
			</div>
	</div>
	

</body>
</html>