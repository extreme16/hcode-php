<?php 

$conn = new mysqli("localhost", "root","", "dbphp7");

if($conn->connect_error){

	echo"erro".$conn->connect_error;

}

$resultado = $conn->query("SELECT * FROM tb_usuarios");

$data = array();

while($row = $resultado->fetch_assoc()){

		array_push($data, $row);
 }


echo json_encode($data);

 ?>