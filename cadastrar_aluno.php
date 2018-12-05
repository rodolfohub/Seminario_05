<?php
  require 'conexao.php';
  require 'classes/classe_usuarios.php';

  $usuario = new Usuarios($pdo);

    
  if (isset($_POST['nome']) && !empty($_POST['nome'])) {

    $usuario->setNome($_POST['nome']);
    $usuario->setTurma($_POST['turma']);
    
    $usuario->cadastrarAluno($usuario);
    $usuario->cadastrarAluno($nome,$turma);
    header("Location: editar_aluno.php");
    exit;
    
  }
  
  


?>