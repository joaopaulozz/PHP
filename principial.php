<?php 
	
	require("pessoa.php");
	//include("pessoa.php"); menos confiavel

	$p = new Pessoa();

	$p->setNome("Joao");
	$p->setIdade(19);

	echo "Nome: ".$p->getNome();
	echo "<br>Idade ".$p->getIdade();


?>