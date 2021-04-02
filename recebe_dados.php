<html>
	<head>
		<title>Radio</title>
		<meta charset=""UTF-8/>
	<head>
	<body>

		<?php

			$nome = $_POST["nome"];
			$sexo = $_POST["sexo"];
			$cargo = $_POST["cargo"];

			echo "Nome: " . $nome . "<br>";
			if ($sexo == 'm') {
				echo "sexo: masculino <br>";
			}
			else
				echo "sexo: feminino <br>";

			if ($cargo == 'ti') {
				echo "cargo: ti";
			}
			else
				echo "cargo: rh";

		?>

	</body>
</html>