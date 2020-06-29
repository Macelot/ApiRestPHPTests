<html>
<head>
</head>
<body>
<?php
	//https://www.codeofaninja.com/2017/02/create-simple-rest-api-in-php.html
    
	echo "Read all / ler todos <br>";
    echo "<a href='http://localhost:8081/api_/product/read.php'>http://localhost:8081/api_/product/read.php</a><hr>";
	
	echo "Read one / ler um  <br>";
    echo "<a href='http://localhost:8081/api_/product/read_one.php?id=60'>http://localhost:8081/api_/product/read_one.php?id=60</a><hr>";
	
	echo "Search / Buscar  <br>";
    echo "<a href='http://localhost:8081/api_/product/search.php?s=shirt'>http://localhost:8081/api_/product/search.php?s=shirt</a><hr>";
	
	echo "Paging / Paginar <br>";
    echo "<a href='http://localhost:8081/api_/product/read_paging.php'>http://localhost:8081/api_/product/read_paging.php</a><hr>";
	
	echo "Read all category / ler todas categorias <br>"; 
    echo "<a href='http://localhost:8081/api_/category/read.php'>http://localhost:8081/api_/category/read.php</a><hr>";
	
	echo "Create / Criar produto <br>"; 
    echo "<a href='http://localhost:8081/api_/config/posts.php?operacao=create'>http://localhost:8081/api_/config/posts.php?operacao=create</a><hr>";
	
    echo "Update / Atualizar produto <br>"; 
    echo "<a href='http://localhost:8081/api_/config/posts.php?operacao=update'>http://localhost:8081/api_/config/posts.php?operacao=update</a><hr>";
	
	echo "Delete / Deletar produto <br>"; 
    echo "<a href='http://localhost:8081/api_/config/posts.php?operacao=delete'>http://localhost:8081/api_/config/posts.php?operacao=delete</a><hr>";
	
?>
</body>
</html>