<?php
 $falta = $_GET['nota'] = &$nota;
 $id = $_GET['id'] = "id_aluno";

 session_start();
     if (!isset($_SESSION['usuariologprof'])) {
          header("Location: portal_prof.php");
          die();
     }
?>

<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <title>Lista de Alunos</title>
     <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body bgcolor="#E0EEE0">
          <div class="topo">
               <div class="subtopo">
                    <div class="logo">
                         <h2><center>Área do Educador</center></h2>
                    </div>
               </div>
          </div>
     <h1 align="center">LANÇAR NOTAS</h1>
     <table class="boletim">
          <tr>
               <th>Id Aluno</th>
               <th>Aluno</th>
               <th>Turma</th>
               <th>IdDisciplina</th>
               <th>Nota</th>
               <th>Ação</th>
          </tr>

          <?php
               require 'conexao.php';
               require 'classes/editar_aluno.php';
               $usuario=new Usuarios($pdo); // passa como parametro a conexao $pdo
               $lista=$usuario->getAlunosNota(); //chama o metodo

               foreach ($lista as $user) { //para cada item da $lista define um $user
          ?>
                    <tr>
                         <td style="text-align: center;">
                              <?php echo $user['id_aluno'];?>
                         </td>

                         <td style="padding-right: 30px;">
                              <?php echo $user['nome_aluno'];?>
                         </td>

                         <td style="padding-right: 10px;">
                              <?php echo $user['turma'];?>                           
                         </td>

                         <td style="padding-right: 10px;">
                              <?php echo $user['id_disciplina'];?>                             
                         </td>

                         <td style="padding-right: 10px;">
                         <form method="POST" action="classes/editar_aluno.php">
                               <input autofocus type="text" name="nota" required value="<?php echo $nota;?>"> 
                         </td>

                         <td style="padding-right: 10px;">
                              <input type="submit" value="Salvar" name="btn_salvar">                          
                         </td>
                         </form>   
                    </tr>

     <?php
          }
               exit;
     ?>        
     </table>
</body>
</html>