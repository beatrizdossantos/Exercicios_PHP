<?php  
	$a = 1;
	$b = -5;
	$c = 6;

	$delta = ($b * $b) - (4*$a*$c);
	$raiz= sqrt($delta);
	$x1 = ((-$b) + ($raiz))/2*$a;
	$x2 = ((-$b) - ($raiz))/2*$a;

	echo "A variável A é: $a <br>";
	echo "A variável B é: $b <br>";
	echo "A variável C é: $c <br>";
	echo "O delta é: $delta <br>";
	echo "A raíz de x1 é: $x1 <br>";
	echo "A raíz de x2 é: $x2 <br>";
?>