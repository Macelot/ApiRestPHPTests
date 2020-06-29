<?php
// required headers

// get database connection
include_once './database.php';

// instantiate CREATEs and INSERTs
include_once './basic.php';

//conecar no banco e criar base api_db, a conexão inicial é feita no banco test
$database = new Database();
$db = $database->getConnection();

//criar base apt_db
$basic = new Basic($db);
$basic->createDB();

//agora que o api_db foi criado, vamos selecionar e trablhar nesta base
$database->db_name="api_db";
$db = $database->getConnection();
$basic = new Basic($db);

//criar tabela Categories e inserir os dados de Categories
$basic->createCategories();
$basic->insertCategories();

//criar tabela Products e inserir os dados de Products
$basic->createProducts();
$basic->insertProducts();

?>
