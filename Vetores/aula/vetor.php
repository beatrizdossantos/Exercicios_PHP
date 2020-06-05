<?php
	
	$produtos = array("Pneu", "Oleo", "Luvas");
	
	$qtde = count($produtos);

	for ($i=0; $i < $qtde; $i++) { 
		echo $produtos[$i]."<br>";
	}
?> 