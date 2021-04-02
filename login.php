<?php
	
	session_start();

	$_SESSION["usuario"] = $_POST["login"];
	$login = $_POST["login"];
	$senha = $_POST["senha"];


	if ($login != 'adm' || $senha != '123'){
		header("location:login.html");
	}
	else{
		$_SESSION["usuario"] = $login; //criação da sessão
		header("location:exibelogin.php"); // redirecionando
	}

?>