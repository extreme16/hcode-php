<?php 

$name = "images";

if (!is_dir($name)) {

	mkdir($name);
	echo "Pasta criada com sucesso";
}	else {

	rmdir($name);
	echo "Já existe a pasta: $name e foi removido";
}

 ?>