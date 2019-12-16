<?php 

require_once("config.php");

$cad = new Cadastro();

$cad->setNome("Jean Carlos");
$cad->setEmail("jeancsandrade@gmail.com");
$cad->setSenha("123456");

echo $cad;

 ?>