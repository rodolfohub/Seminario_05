<html>
    <head>
        <meta charset="utf-8">
        <title>Cadastrar Alunos</title>       
    </head>
    <body>
        <h2>Cadastro de Alunos</h2>
       <form method="POST" action="Seminario_05/cadastrar_aluno.php"> 
          <label>Nome</label> 
          <input autofocus type="tex" name="nome" placeholder="Nome do aluno" required style="margin-left: 10px;margin-bottom: 10px;width: 350px" /><br>
          
          <label>Turma</label> 
          <input type="text" name="turma" placeholder="Turma do aluno" style="margin-left: 22px;margin-bottom: 10px" />
          <br>
          <input type="submit" value="Salvar" name="btn_salvar" > 
        </form>  
    </body>
</html>