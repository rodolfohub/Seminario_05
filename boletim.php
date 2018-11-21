<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>BOLETIM</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body bgcolor="#E0EEE0">
		<div class="topo">
			<div class="subtopo">
				<div class="logo">
					<h2><center>Área do Aluno</center></h2>
				</div>
			</div>
		</div>
	<h1 align="center">BOLETIM ACADÊMICO</h1>
	<table class="boletim">
			<tr>
				<th>Id Disciplina</th>
				<th>Disciplina</th>
				<th>nota</th>
				<th>faltas</th>
			</tr>

		<?php
			require 'conexao.php';
			require 'classes/classe_usuarios_aluno_boletim.php';
			$usuario=new Usuarios($pdo); // passa como parametro a conexao $pdo
			$lista=$usuario->getUsuarios(); //chama o metodo

			foreach ($lista as $user) { //para cada item da $lista define um $user
		?>
				<tr>
					<td style="text-align: center;">
						<?php echo $user['id_disciplina'];?>
					</td>

					<td style="padding-right: 30px;">
						<?php echo $user['nome_disciplina'];?>
					</td>

					<td style="padding-right: 10px;">
						<?php echo $user['nota'];?>						
					</td>

					<td style="padding-right: 10px;">
						<?php echo $user['faltas'];?>						
					</td>

				</tr>

		<?php
			}
				exit;
		?>				
	</table>
</body>
</html>