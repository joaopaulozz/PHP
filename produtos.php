<?php

	$nome = $_POST["nome"];
	$valor = $_POST["valor"];
	$q = $_POST["q"];

	$nomedb = "loja";
	$usuario = "root";
	$senha = "";//se tiver
	$local = "localhost";//ip

	$conexao = mysqli_connect($local,$usuario,$senha,$nomedb)
	or die("Erro ao tentar conectar com o banco de dados".mysqli_error());

	//insere na tabela bd
	$sql = "insert into produtos (nome,valor,quantidade)values"."('$nome',$valor,$q)";

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