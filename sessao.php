<?php
	
	session_start();

	$_SESSION["sessao"] = $_POST["valor"];


	echo "<a href=\"exibe.php\">Navegar</a>";

?>
