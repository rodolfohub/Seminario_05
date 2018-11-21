<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Impressão de Boletos</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body bgcolor="#E0EEE0">
	<div class="topo">
			<div class="subtopo">
				<div class="logo">
					<h2><center>Área Financeira</center></h2>
				</div>
			</div>
		</div>
	<div class="bgboletos">
		<h1><center/>Selecione o Boleto</h1>
		<div class="boletos">
			<table class="boletos">
				<tr>
					<th>Referência</th>
					<th>Informações</th>
					<th>Boletos</th>
				</tr>
				<tr>
					<td>
						<?php echo "Vencimento: 10/"; echo date("m/Y");?>
					</td>
					<td>
						<?php echo " - Valor atual até o vencimento, R$ 500,00.";?>
					</td>
					<td>
						<a href="boleto.pdf"> Gerar Boleto</a>
					</td>
				</tr>
			</table>
		</div>
	</div>
</body>
</html>