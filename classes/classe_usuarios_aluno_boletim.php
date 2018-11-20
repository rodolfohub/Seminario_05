<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>BOLETIM</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

<?php

class Usuarios{
	private $pdo;
	
	public function __construct($pdo){//salva a conexão dentro da classe
		$this->pdo=$pdo;
	}
	
	public function getUsuarios(){//Listar todos os usuários
		$array = array(); //definindo uma variável do tipo arrayj

		$sql="SELECT disciplina.id_disciplina, disciplina.nome_disciplina, aluno_disciplina.nota, aluno_disciplina.faltas from disciplina 
			INNER JOIN aluno_disciplina ON disciplina.id_disciplina = aluno_disciplina.id_disciplina 
			INNER JOIN aluno ON aluno.id_aluno = aluno_disciplina.id_aluno
			WHERE aluno.id_aluno = 1";//Listar tudo da tabela usuarios
		$sql=$this->pdo->query($sql);
		
		if ($sql->rowCount()>0) {//tem registro?
			$array=$sql->fetchAll();//lista tudo
		}
		return $array;		
	}
}
?>

</body>
</html>