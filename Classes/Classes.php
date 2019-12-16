<?php 

class Pessoa {

	public $nome = "Jean Carlos";
	protected $idade = 28;
	private $senha = "123456";

	public function verDados(){

		echo $this->nome . "<br/>";
		echo $this->idade . "<br/>";
		echo $this->senha . "<br/>";


	}

}

$objeto = new Pessoa();

//echo $objeto->senha . "<br/>";
$objeto->verDados();

 ?>