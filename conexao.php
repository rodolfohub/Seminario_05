<?php

	try{

		$pdo = new PDO("mysql:dbname=bdacademico;host=localhost","root","");
		//echo "Conectado ao banco";
		
	}catch(PDOException $e){
		echo "ERRO".$e->getMessage();
	}
?>