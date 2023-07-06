<?php 

$config = require("config.php");
$db = new Database($config['database']);

$heading = "student";

$student = $db->query("select * from students where id = :id", ['id' => $_GET['id']])->fetch();


require "views/student.view.php";    