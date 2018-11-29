<?php
	session_start();

	if (!isset($_SESSION['usuariologadm'])){
		header("Location: frm_login_adm.php");
	}

	if (isset($_GET['SairAdm'])) {
		session_destroy();
		header("Location: frm_login_adm.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Área do Administrador</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body bgcolor="#E6E6E6">
	<div class="topoa">
		<div class="subtopoa">
			<h2><center>Portal do Administrador</h2>
		</div>
		<div class="menu">
					<ul>
						<li><a href="editar_aluno.php">Editar Alunos</a></li>
						<li><a href="excluir_aluno.php">Excluir Alunos</a></li>
						<li><a href="editar_prof.php">Editar Professores</a></li>
						<li><a href="excluir_prof.php">Excluir Professores</a></li>
						<li><a href="?SairAdm">Sair</a></li>
					</ul>
	     </div>
	 </div>
		
	
</body>
</html>