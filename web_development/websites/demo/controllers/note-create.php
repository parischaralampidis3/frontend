<?php

$heading="Create note";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    dd($_POST);
}
#dd($_SERVER);
require("views/note-create.view.php");