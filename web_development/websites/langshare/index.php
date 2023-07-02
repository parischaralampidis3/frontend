<?php

require "functions.php";
require "Database.php";
require "router.php";

$config = require("config.php");

$db = new Database($config['database']);


$id = $_GET['id'];
$query = "select * from posts where id = ?" ; 

$class = $db->query($query, [$id])->fetch();


// Connect to the MySQL daabase.

