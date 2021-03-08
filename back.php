<?php
$id = $_POST['id'];
$senha = $_POST['senha'];

$json = file_get_contents("dados.json");
$data = json_decode($json);
	

foreach ($data as $key => $value):
    if (strval($id) == strval($value->id) && strval($senha) == strval($value->senha)){
        $link = $value->link;    
    }

endforeach;


if ($link) {
	header ("location:{$link}");
}else{
	header ("location:voltar.html");
}

/*
	echo '<pre>';
	print_r($id);
	echo '</pre>';
	echo '<pre>';
	print_r($data[3]->id);
	echo '</pre>';
	echo '<pre>';
	print_r($senha);
	echo '</pre>';
	echo '<pre>';
	print_r($data[3]->senha);
	echo '</pre>';
*/


?>