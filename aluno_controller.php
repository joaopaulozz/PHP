<?php

require("aluno_model.php");

class AlunoController{
	
	public function gravar(){
		$a = new AlunoModel();
		$a->setNome($_POST["nome"]);
		if($a->gravar()){
			echo "Cadastrado com sucesso";
		}else{
			echo "Erro ao tentar cadastrar";
		}
	}
	
	public function buscarTudo(){
		$a = new AlunoModel();
		return $a->buscarTudo();
	}
	
} //fim da classe



	if(isset($_GET["opcao"])){
		$ac = new AlunoController();
		switch($_GET["opcao"]){
			case 1:
				$ac -> gravar();
				break;
		}
		
	}


?>