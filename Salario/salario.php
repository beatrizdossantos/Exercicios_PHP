<?php
	$salario=1000;
	$i=0.015;

	for ($i=0.015; $i <= 0.12; $i=$i*2) { 
		$salario=$salario+($salario*$i);
	}
	echo "O salário em 2019 será de R$". $salario. "!";
?>