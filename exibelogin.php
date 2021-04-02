<!DOCTYPE html>
<html>
<head>
	<title></title>
	<img src="docamarvi.png">
<body>

<?php


	session_start();

	if( !isset($_SESSION["usuario"])) //verifica se a sessão é existente
		header("location:login.html");

	echo "Bem vindo";


?>

<br>
<a href="exibir.php?cor=vermelho">Vermelho</a>
<br>
<a href="exibir.php?cor=azul">Azul</a>
</head>
</body>
</html>
