<?php

use Core\Database;

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

view('notes/show.view.php', array(
    'heading' => $heading, 
    'note' => $note
)
); 


