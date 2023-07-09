<?php

$config = require("config.php");
$db = new Database($config['database']);

if($_SERVER["REQUEST_METHOD"] === "POST"){
  
    $db->query("INSERT INTO STUDENTS (firstname,lastname,email,class_id) VALUES(:firstname,:lastname,:email,:class_id)",[
        'firstname'=>$_POST['firstname'], 
        'lastname'=>$_POST['lastname'],
        'email'=>$_POST['email'],
        'class_id'=> 1    
    ]);
};

require ("views/create.view.php");