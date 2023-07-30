<?php 

$config = require base_path("config.php");
$db = new Database($config['database']);



$student = $db->query("select * from students where id = :id", ['id' => $_GET['id']])->fetch();

view("langStudents/show.view.php",[
    'student'=> $student
]);    