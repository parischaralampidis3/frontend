<?php

require "functions.php";
require "Database.php";

$config = require("config.php");

$db = new Database($config['database']);


$id = $_GET['id'];
$query = "select * from class where id = ?" ; 

$class = $db->query($query, [$id])->fetch();


// Connect to the MySQL daabase.

dd($class); 