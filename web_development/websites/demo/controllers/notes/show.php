<?php


    $currentUserId = 1;

      $note = $db->query('select * from  notes where  id = :id', [
    'id' => $_GET['id']
    ])->findOrFail();

    authorize($note['user_id'] === $currentUserId);

view('notes/show.view.php', array(
    'heading' => $heading, 
    'note' => $note
    )); 
  





