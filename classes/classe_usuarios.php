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
		private $aluno;

		public function setUsr_aluno($usr_aluno){
			$this->usr_aluno = $usr_aluno;
		}
		public function getUsr_aluno(){
			return $this->usr_aluno;
		}

		
		public function __construct($pdo){
			$this->pdo=$pdo;
		}

		public function getBoletim(){
			$array = array(); 
			$sql="SELECT disciplina.id_disciplina, disciplina.nome_disciplina, aluno_disciplina.nota, aluno_disciplina.faltas from disciplina 
				INNER JOIN aluno_disciplina ON disciplina.id_disciplina = aluno_disciplina.id_disciplina 
				INNER JOIN aluno ON aluno.id_aluno = aluno_disciplina.id_aluno
                INNER JOIN usuarios_aluno ON aluno.id_aluno = usuarios_aluno.id_usuario
				WHERE  aluno.id_aluno=1";
				//$sql = $this->pdo->prepare($sql);
				//$sql->bindValue(":v_usr_aluno", $aluno->getUsr_aluno());
				//$sql->execute();
				$sql=$this->pdo->query($sql);

			if ($sql->rowCount()>0) {
				$array=$sql->fetchAll();
			}
			return $array;		
			}

			 function editar(Usuarios $dados) {
			$sql = "UPDATE aluno_disciplina SET faltas=:v_falta WHERE id_aluno=:v_id AND id_disciplina=:v_idDisc";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(":v_falta", $dados->getFalta());
			$sql->bindValue(":v_id", $dados->getId());
			$sql->bindValue(":v_idDisc", $dados->getIdDisc());
			$sql->execute();
		}
	}

?>

</body>
</html>