<?php
//https://pt.stackoverflow.com/questions/534/como-enviar-uma-requisi%C3%A7%C3%A3o-post-a-uma-rest-api-em-php
if($_GET['operacao']=="create"){
	$url  = 'http://localhost:8081/api_/product/create.php';
	$data = ['name' => 'Amazing Pillow 2.0',
			'price' => '199',
			'description' => 'The best pillow for amazing programmers',
			'category_id' => '2'];
			
	$ch   = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
	$result = curl_exec($ch);
	curl_close($ch);
}

if($_GET['operacao']=="update"){
	$url  = 'http://localhost:8081/api_/product/update.php';
	$data = ['id' => '48',
			'name' => 'Amazing Pillow 3.0',
			'price' => '1999999999',
			'description' => 'The best pillow for amazing programmers',
			'category_id' => '2'];
	$ch   = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
	$result = curl_exec($ch);
	curl_close($ch);
}

if($_GET['operacao']=="delete"){
	$url  = 'http://localhost:8081/api_/product/delete.php';
	$data = ['id' => '60'];
	$ch   = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
	$result = curl_exec($ch);
	curl_close($ch);
}

?>