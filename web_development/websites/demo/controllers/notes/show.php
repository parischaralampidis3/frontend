<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $db -> query('delete from notes where id = :id',[
        'id' => $_GET['id']
    ]);
    
    authorize($note['user_id'] === $currentUserId);

    $note = $db->query("select * from  notes where  id = :id", [
    'id' => $_GET['id']
    ])->findOrFail();

    header('location: /notes');
    exit();

}else{

    $heading = 'Note';
    $currentUserId = 1;

      $note = $db->query("select * from  notes where  id = :id", [
    'id' => $_GET['id']
    ])->findOrFail();



if(!$note){
    abort();
}



view('notes/show.view.php', array(
    'heading' => $heading, 
    'note' => $note
    )); 
  
}




