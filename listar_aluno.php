<html>
<body>

	<?php
	
		require("aluno_controller.php");
		
		$ac = new AlunoController();
		$dados = $ac -> buscarTudo();
		
		echo "Foram encontrados ".mysqli_num_rows($dados)." registros <br><br>";
		
		if(mysqli_num_rows($dados) > 0){ // conta qts registros vieram do banco de dados.
			while($linha = mysqli_fetch_assoc($dados)){ //pega cada registro vindo do banco e exibe um por um.
				echo $linha["id"] . " - " . 
				$linha["nome"]."<br>";
			}
		}
	
	?>

</body>
</html>