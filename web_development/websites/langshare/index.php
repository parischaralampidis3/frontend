<?php

require "functions.php";
require "Database.php";

$config = require("config.php");

$db = new Database($config['database']);
$class = $db->query("select * from class")->fetchAll();


// Connect to the MySQL daabase.

dd($class); 