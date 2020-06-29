<?php
class Database{
    //https://www.codeofaninja.com/2017/02/create-simple-rest-api-in-php.html
    // specify your own database credentials
    //grant ALL privileges on api_db.* to 'seconduser'@'%' IDENTIFIED by 'zxasqw12';
    // specify your own database credentials
    //grant ALL privileges on api_db.* to 'seconduser'@'%' IDENTIFIED by 'zxasqw12';
    //read all
    //http://127.0.0.1:8033/site/api/product/read.php
    //POST
    //http://127.0.0.1:8033/site/api/product/create.php
    //"Body" tab., "raw". paste:
    /*
    {
      "name" : "Amazing Pillow 2.0",
      "price" : "199",
      "description" : "The best pillow for amazing programmers.",
      "category_id" : 2,
      "created" : "2018-06-01 00:35:07"
    }
    */
    //read one
    //http://127.0.0.1:8033/site/api/product/read_one.php?id=60

    //POST
    //http://127.0.0.1:8033/site/api/product/update.php
    //"Body" tab., "raw". paste:
    /*
    {
        "id" : "48",
        "name" : "Amazing Pillow 3.0",
        "price" : "255",
        "description" : "The best pillow for amazing programmers.",
        "category_id" : 2,
        "created" : "2018-08-01 00:35:07"
    }
    */

    //http://127.0.0.1:8033/site/api/product/delete.php
    //"Body" tab., "raw". paste:
    /*
    {
        "id" : "106"
    }
    */

    //get ou post
    //http://127.0.0.1:8033/site/api/product/search.php?s=shirt
    //

    //http://127.0.0.1:8033/site/api/product/read_paging.php

    //http://127.0.0.1:8033/site/api/category/read.php

    private $host = "localhost:3307";
    public $db_name = "test";
    private $username = "root";
    private $password = "usbw";
    public $conn;

    // get the database connection
    public function getConnection(){

        $this->conn = null;

        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
?>
