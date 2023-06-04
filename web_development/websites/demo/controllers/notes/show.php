<?php

$config = require base_path('config.php');
$db = new Database($config['database']);
$heading = 'Note';
$currentUserId = 1;

$note = $db->query("select * from  notes where  id = :id", [
    'id' => $_GET['id']
])->findOrFail();


if(!$note){
    abort();
}

authorize($note['user_id'] === $currentUserId);

 
require base_path("views/notes/show.view.php");

view('notes/index.view.php', array(
    'heading' => $heading, 
    'note' => $note
)
); 


