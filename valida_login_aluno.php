<?php
	session_start();
	if (isset($_SESSION['usuariologaluno'])) {
		header("Location: portal_aluno.php");
		die();
	}
	
	require 'conexao.php';

	if (isset($_POST['nome']) && !empty($_POST['nome'])){

		$login=$_POST['nome'];
		$senha=$_POST['senha'];
		$sql="SELECT * FROM usuarios_aluno WHERE usuario=:v_login AND senha=:v_senha";

		$sql=$pdo->prepare($sql);
		$sql->bindValue(":v_login",$login);
		$sql->bindValue(":v_senha",$senha);
		$sql->execute();

		 
			if($sql->rowCount()>0){
				$_SESSION['usuariologaluno'] = true;
				header("Location:portal_aluno.php");
				exit;
			}else{
				header("Location:error.php");
			}

	}
?>
