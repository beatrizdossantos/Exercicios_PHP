<?php
	$nums = array(5,8,4,9,13,12,6,7);
	$numV=0;

	foreach ($nums as $valor) {
		if ($valor%2!=0) {
			$numV= $numV+1;
		}
	}
	echo "O número de valores ímpares é: ". $numV;	

?>

