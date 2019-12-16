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

class Programador extends Pessoa {

	public function verDados(){
		echo get_class($this) . "<br/>";
		echo $this->nome . "<br/>";
		echo $this->idade . "<br/>";
		echo $this->senha . "<br/>";


	}

}
$objeto = new Programador();

//echo $objeto->senha . "<br/>";
$objeto->verDados();

 ?>