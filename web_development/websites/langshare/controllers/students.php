<?php 


$config = require("config.php");
$db = new Database($config['database']);

$heading = "students";


$students = $db->query("select * from students where class_id = 1")->fetchAll();



require("views/students.view.php");    