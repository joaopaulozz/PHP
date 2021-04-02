<?php 
	//dsession_start();
	require("carros.php");
	//include("pessoa.php"); menos confiavel

	$p = new Carro();

	$p->setModelo($_POST["modelo"]);
	$p->setValor($_POST["valor"]);

	if(isset($_POST["marca"]) == "h"){
		echo "<br>HYUNDAI";
	}
	if(isset($_POST["marca"]) == "v"){
		echo "<br>VOLVO";
	}
	if(isset($_POST["marca"]) == "c"){
		echo "<br>CHEVROLET";
	}
	if(isset($_POST["ar"])){
		echo "<br>AR CONDICIONADO";
	}
	if(isset($_POST["direcao"])){
		echo "<br>DIREÇÃO";
	}
	if(isset($_POST["op"]) != "n"){
		echo "<br>Usado";
	}
	if(isset($_POST["op"]) != "u"){
		echo "<br>Novo";
	}
	echo "<br>Modelo: ".$p->getModelo();
	echo "<br>Valor: ".$p->getValor();


?>