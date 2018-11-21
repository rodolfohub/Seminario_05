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
	/*
	private $falta;
	private $id;
	private $idDisc

	public function setId($id)
	{
		$this->id = $id;
	}
	public function getId()
	{
		return $this->id;
	}

	public function setFalta($falta)
	{
		$this->falta = $Falta;
	}
	public function getFalta()
	{
		return $this->Falta;
	}

	public function setIdDisc($idDisc)
	{
		$this->idDisc = $idDisc;
	}
	public function getIdDisc()
	{
		return $this->idDisc;
	}

	*/
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

	public function editar(Usuarios $dados) {
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