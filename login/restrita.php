<?php
   session_start();
   if (!isset($_SESSION['usuario']) && !isset($_SESSION['senha'])) {      // se(if) não(!) estiverem preenchidos(isset) aqueles campos, ele vai mandar para a outra pg
   	header('location:index.html');
   }
echo "PÁGINA RESTRITA";
?>
<form action="logout.php">
	<input type="submit" value="SAIR">
</form>