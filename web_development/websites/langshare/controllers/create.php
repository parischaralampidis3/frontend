<?php

$config = require("config.php");
$db = new Database($config['database']);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];

    if (strlen($_POST['firstname']) === 0) {
        $errors['firstname'] = "firstname is required";
    }

    if (empty($errors)) {
        $db->query("INSERT INTO STUDENTS (firstname,lastname,email,city,phone_number,class_id) VALUES(:firstname,:lastname,:email,:city,:phone_number,:class_id)", [
            'firstname' => $_POST['firstname'],
            'lastname' => $_POST['lastname'],
            'email' => $_POST['email'],
            'city' => $_POST['city'],
            'phone_number' => $_POST['phone_number'],
            'class_id' => 1
        ]);

    }
}

require("views/create.view.php");