<?php

	$nome = $_POST["nome"];
	$sexo = $_POST["sexo"];
	$idade = $_POST["idade"];

	$nomedb = "base";
	$usuario = "root";
	$senha = "";//se tiver
	$local = "localhost";//ip

	$conexao = mysqli_connect($local,$usuario,$senha,$nomedb)
	or die("Erro ao tentar conectar com o banco de dados".mysqli_error());

	//insere na tabela bd
	$sql = "insert into tabela (nome,sexo,idade)values"."('$nome','$sexo',$idade)";

	if(mysqli_query($conexao,$sql))
		{
		echo("Cadastrado com sucesso");
		}
	else
		{
			echo("Erro ao cadastrar");
		}

	mysqli_close($conexao);

?>