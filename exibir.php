<html>
	<head>
		<title> LOGIN </title>
		<meta charset="UTF-8">
	</head>
	<body>

<?php

	session_start();

	//verifica se a sessao é existente
	if ( !isset($_SESSION["usuario"]))
		header("location:login.html");

	if ($_GET["cor"] == "vermelho")
		echo "Usuario clicou em vermelho";

	else
		echo "Usuario clicou em azul";

?>

</body>
</html>