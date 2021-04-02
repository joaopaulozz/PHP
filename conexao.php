<?php

class Conexao{
	private $nomedb = "escola";
	private $usuario = "root";
	private $senha = "";
	private $local = "localhost";
	
	public function conectar(){
		$conexao = mysqli_connect($this->local, $this->usuario, $this->senha, $this->nomedb)or die("Erro ao tentar conectar com o banco de dados - ".mysqli_error());
		return $conexao;
	}
}

?>