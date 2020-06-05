<?php
	$notas = array(5,8,7);
	$maior = 0;

	foreach ($notas as $valor) {
		if ($valor > $maior) {
			$maior = $valor;
		}
	}
	echo "A maior nota é: ". $maior;	

?>