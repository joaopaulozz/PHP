<?php
require("conexao.php");

class AlunoModel{
	private $nome;
	
	public function getNome(){
		return $this->nome;
	}
	
	public function setNome($n){
		$this->nome = $n;
	}
	
	public function gravar(){
		$sql = "insert into aluno (nome) values ('".$this->getNome()."')";
		$con = new Conexao();
		return mysqli_query($con->conectar(),$sql);
	}
	
	public function buscarTudo(){
		$sql = "select id, nome from aluno";
		$con = new Conexao();
		return mysqli_query($con->conectar(),$sql);
	}
	
}


?>