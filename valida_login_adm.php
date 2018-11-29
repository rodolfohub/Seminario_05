<?php
	session_start();
	if (isset($_SESSION['usuariologadm'])) {
		header("Location: admin.php");
		die();
	}
	
	require 'conexao.php';

	if (isset($_POST['nome']) && !empty($_POST['nome'])){

		$login=$_POST['nome'];
		$senha=$_POST['senha'];
		$sql="SELECT * FROM administradores WHERE usuario_adm=:v_login AND senha_adm=:v_senha";

		$sql=$pdo->prepare($sql);
		$sql->bindValue(":v_login",$login);
		$sql->bindValue(":v_senha",$senha);
		$sql->execute();

		 
			if($sql->rowCount()>0){
				$_SESSION['usuariologadm'] = true;
				header("Location:admin.php");
				exit;
			}else{
				header("Location:error.php");
			}

	}
?>
