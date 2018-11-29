
<?php

class Login{

	function __construct(){
		
		$username = $_POST['nome'];
		$password = $_POST['senha'];

		$this->find($username, $password);
		
	}

	
	public function find($username, $password){
		$s = "SELECT * FROM funcionario WHERE username= :u AND password= :p";
		
		$v = $sql->prepare($s);

		$v->bindParam(":u", $username, PDO::PARAM_STR, 8);
		$v->bindParam(":p", $password, PDO::PARAM_STR, 12);

		$v->execute();

		$resultado = $v->fetchAll();

		if(count($resultado) > 0){

			foreach($resultado as $r){
				
				$_SESSION['nome'] = $r['nome'];
				$_SESSION['id'] = $r['idusuario'];
				$_SESSSION['idprofessor'] = $r['idprofessor'];
				
			}

			header("Location: portal_prof.php");

		}else{

			echo "Usuario ou Senha inválidos";		
		}
	
	}
} //end class


new Login();




