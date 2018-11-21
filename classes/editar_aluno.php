<?php

class Usuarios{
	private $pdo;
	
	public function __construct($pdo){//salva a conexão dentro da classe
		$this->pdo=$pdo;
	}
	
	public function getAlunosNota(){//Listar todos os usuários
		$array = array(); //definindo uma variável do tipo arrayj

		$sql="SELECT aluno.id_aluno, aluno.nome_aluno, aluno.turma, disciplina.id_disciplina, aluno_disciplina.nota from aluno

			INNER JOIN aluno_disciplina ON aluno.id_aluno = aluno_disciplina.id_aluno

			INNER JOIN disciplina ON disciplina.id_disciplina = aluno_disciplina.id_disciplina

			WHERE disciplina.id_disciplina = 1";//Listar tudo da tabela usuarios
		
		$sql=$this->pdo->query($sql);
		
		if ($sql->rowCount()>0) {//tem registro?
			$array=$sql->fetchAll();//lista tudo
		}
		return $array;		
	}

	public function getAlunosFaltas(){//Listar todos os usuários
		$array = array(); //definindo uma variável do tipo arrayj

		$sql="SELECT aluno.id_aluno, aluno.nome_aluno, aluno.turma, disciplina.id_disciplina, aluno_disciplina.faltas from aluno

			INNER JOIN aluno_disciplina ON aluno.id_aluno = aluno_disciplina.id_aluno

			INNER JOIN disciplina ON disciplina.id_disciplina = aluno_disciplina.id_disciplina

			WHERE disciplina.id_disciplina = 1";//Listar tudo da tabela usuarios
		
		$sql=$this->pdo->query($sql);
		
		if ($sql->rowCount()>0) {//tem registro?
			$array=$sql->fetchAll();//lista tudo
		}
		return $array;		
	}

	public function editar(Usuarios $dados) {
		$sql = "UPDATE aluno_disciplina SET falta=:v_falta WHERE id_aluno=:v_id AND id_disciplina=:v_idDisc";
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(":v_falta", $dados->getFalta());
		$sql->bindValue(":v_id", $dados->getId());
		$sql->bindValue(":v_idDisc", $dados->getIdDisc());
		$sql->execute();
	}


}
?>