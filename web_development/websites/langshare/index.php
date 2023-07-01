<?php

require "functions.php";


class Database{
    public $connection; 
    function __construct(){

            $dsn = "mysql:host=localhost;port=3306;dbname=langshare;user=root;charset=utf8mb4";
            // Tip: This should be wrapped in a try-catch. We'll learn how, soon.
            $this->connection = new PDO($dsn);

    }
    public function query($query){

            $statement = $this->connection->prepare($query);


            $statement->execute();

            return $statement->fetchAll(PDO::FETCH_ASSOC);

    }
}

$db = new Database();
$class=$db-> query("select * from class");


// Connect to the MySQL daabase.

            foreach ($class as $item) {
    echo "<li>" . $item['title']. "</li>";
}


