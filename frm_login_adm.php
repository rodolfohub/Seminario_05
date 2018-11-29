<?php
	session_start();
	if (isset($_SESSION['usuariologadm'])) {
		header("Location: admin.php");
		die();
	}
?>	

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tela de Login</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body bgcolor="#E6E6E6">
	
		<div class="topo"></div>
			<div class="container">
				<div class="box">
					<div class="logo">
						<img src="logo.png">
					</div>
					<h1>Área do Adm</h1>
					<form method="POST" action="valida_login_adm.php">
					<ul>Usuário</ul>	
					<input autofocus type="text" name="nome"
						placeholder="Digite o nome" required/>
					<ul>Senha</ul>
					<input type="password" name="senha" 
						placeholder="Inserir uma senha" required/>
					<ul> </ul>
					<input class="entrar" type="submit" value="Entrar" name="btn_entrar">					
					<ul> </ul>
					<li><a href="">Esqueci minha senha</a></li>
				</div>
			</div>
	
	

</body>
</html>