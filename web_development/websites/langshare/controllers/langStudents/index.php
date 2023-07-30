<?php 


$config = require base_path("config.php");
$db = new Database($config['database']);


$students = $db->query("select * from students where class_id = 1")->fetchAll();



view("langStudents/index.view.php",[
    'students' => $students
]);    