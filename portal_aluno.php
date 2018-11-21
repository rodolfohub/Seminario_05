<?php
	session_start();

	if (!isset($_SESSION['usuariologaluno'])){
		header("Location: frm_login_aluno.php");
	}

	if (isset($_GET['SairAluno'])) {
		session_destroy();
		header("Location: frm_login_aluno.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Portal do Aluno</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div class="background">
		<div class="topo">
			<div class="subtopo">
				<dir class="info">
					<h2>
					 	Bem vindo!
					</h2>
				</dir>
				<div class="logo">
					<h2>Área do Aluno</h2>
				</div>
			</div>
		</div>

		<div class="menu">
			<h1>Menu</h1>
				<ul>
					<li><a href="boletim.php"> Boletim</a></li>
					<li><a href="boletos.php"> Imprimir Boleto</a></li>
					<li><a href="?SairAluno">Sair</a></li>
				</ul>
		</div>
	</div>
</body>
</html>