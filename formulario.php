<?php
		// testes print_r($_POST);

	$name = $_POST["name"];
	$cidade = $_POST["cidade"];
	$end = $_POST["end"]; 
	$obs = $_POST["obs"];

	echo "$name<br>";
	echo "$cidade<br>";
	echo "$end<br>";
	echo "$obs<br>";

	if(isset($_POST["internet"])){
		echo"Internet<br>";
		}
	if(isset($_POST["grafico"])){
		echo"Grafico<br>";
		}
	if(isset($_POST["jogo"])){
		echo"Jogo<br>";
		}
	if(isset($_POST["negocio"])){
		echo"Negocio<br>";
		}
	if(isset($_POST["programacao"])){
		echo"Programação<br>";
		}
	if(isset($_POST["i1"])){
		echo"1 - 10<br>";
		}
	if(isset($_POST["i2"])){
		echo"11 - 30<br>";
		}
	if(isset($_POST["i3"])){
		echo"31 - 60<br>";
		}
	if(isset($_POST["i4"])){
		echo"61 ou mais<br>";
		}
	if($_POST["Opicional"] == "a"){
		echo"Voce mora sozinho<br>";
		}
	if($_POST["Opicional"] == "b"){
		echo"1 Pessoa<br>";
		}
	if($_POST["Opicional"] == "c"){
		echo"2 Pessoas<br>";
		}
	if($_POST["Opicional"] == "d"){
		echo"3 ou mais Pessoas<br>";
		}

?>