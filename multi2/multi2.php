<?php
	$vet = array(5,8,4,9,13,12,6,7);
	$vet_1 = array();

	$qtde = count($vet);

	for ($i=0; $i <$qtde; $i++) {
		$vet_1[$i]=$vet[$i]*2;
		echo $vet_1[$i]. "<br>";
}
	

?>