<?php

require base_path('Validator.php');
$config = require base_path('config.php');
$db = new Database($config['database']);
 $errors = [];
$heading="Create note";

if($_SERVER['REQUEST_METHOD'] === 'POST'){
   

    if(! Validator::string($_POST['body'],1, 500 )){
    $errors['body'] = "The body cannot be more than 1000 characters.";
    }

    if(empty($errors)){
    $db -> query('INSERT INTO notes(body, user_id)VALUES(:body,:user_id)',[
        'body' => $_POST['body'],
        'user_id' => 1
    ]);
}
};

require base_path("views/notes/create.view.php");

view('notes/index.view.php', array(
    'heading' => $heading, 
    'errors' => $errors
)
); 