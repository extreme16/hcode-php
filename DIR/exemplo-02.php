<?php 

$images = scandir("images");
$data = array();
foreach ($images as $img) {
	
	if (!in_array($img, array(".",".."))){

		$filename = "images" . DIRECTORY_SEPARATOR . $img;

		$info =pathinfo($filename);
		$info["size"] = filesize($filename);
		$info["modified"] = date("d/m/Y H:i:S", filemtime($filename));
		$info["url"] = stripslashes("http://localhost/DIR/".$filename);
		array_push($data, $info);
	}
}

echo json_encode($data);

 ?>