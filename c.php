<html>
	<head>
		<title>Radio</title>
		<meta charset=""UTF-8/>
	<head>
	<body>


		<?php
			$v = $_POST["v"];

			if ($v == "divisao"){
				$r = $_POST["Valor1"] /  $_POST["Valor2"];
				echo "$r";
			}
			
			if ($v == "multi"){
				$r = $_POST["Valor1"] * $_POST["Valor2"];
				echo "$r";
			}

			if ($v == "adicao"){
				$r = $_POST["Valor1"] +  $_POST["Valor2"];
				echo "$r";
			}
			
			if ($v == "subtracao"){
				$r = $_POST["Valor1"] -  $_POST["Valor2"];
				echo "$r";
			}

		?>

	</body>
</html>