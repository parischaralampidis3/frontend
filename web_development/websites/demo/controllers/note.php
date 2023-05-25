<?php
$config = require('config.php');
$db = new Database($config['database']);

$heading = 'Note';

$id = $_GET['id'];

// Sanitize the input to prevent SQL injection
$id = intval($id); // Assuming the ID should be an integer

$query = "SELECT * FROM notes WHERE id = $id";
$notes = $db->query($query)->fetch();

require("views/note.view.php");