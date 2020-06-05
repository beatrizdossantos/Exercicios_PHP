<!DOCTYPE html>
<html>
<head>
	<title>Teste</title>
</head>
<body>
	<table>
	<table border="1">
		<tr>
			<th>ID</th>
			<th>NOME</th>
			<th>SENHA</th>
		</tr>
	<?php

		$usuarios = array(
			array(1,"admin",1234),
			array(2,"aluno",4321),
			array(3,"secretaria",0000)
		);

		for ($linhas=0; $linhas <= 2; $linhas++) {
			echo "<tr>"; 
			for ($colunas=0; $colunas <= 2; $colunas++) { 
					echo "<td>".$usuarios[$linhas][$colunas]."</td>";
				}	
				echo "<tr>";
			}
	?>
	</table>
</body>
</html>

