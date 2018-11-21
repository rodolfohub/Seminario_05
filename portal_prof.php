<?php
	session_start();

	if (!isset($_SESSION['usuariologprof'])){
		header("Location: frm_login_prof.php");	
	}

	if (isset($_GET['SairProf'])) {
		session_destroy();
		header("Location: frm_login_prof.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Portal do Professor</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div class="background">
		<div class="topo">
			<div class="subtopo">
				<dir class="info">
					<h2>
						Bem vindo Professor
					</h2>
				</dir>
				<div class="logo">
					<h2> Área do Professor</h2>
				</div>
			</div>
		</div>

		<div class="menu">
			<h1>Menu</h1>
				<ul>
					<li><a href="lancar_notas.php">Lançar Notas</a></li>
					<li><a href="lancar_faltas.php">Lançar Faltas</a></li>
					<li><a href="?SairProf">Sair</a></li>
				</ul>
		</div>
	</div>
</body>
</html>