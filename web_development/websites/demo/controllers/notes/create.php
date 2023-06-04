<?php

require('Validator.php');

$config = require('config.php'); 
$db = new Database($config['database']);

$heading="Create note";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $errors = [];

    $validator = new Validator();




    if($validator->string($_POST['body'])){
     $errors['body'] = "A body is required";   
    }
    
    if($validation->string($POST['body']) > 1000 ){

    $errors['body'] = "The body cannot be more than 1000 characters.";

    }


    if(empty($errors)){

    $db -> query('INSERT INTO notes(body, user_id)VALUES(:body,:user_id)',[
        'body' => $_POST['body'],
        'user_id' => 1

    ]);

}


}
#dd($_SERVER);
require("views/notes/create.view.php");