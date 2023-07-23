<?php

$config = require("config.php");
$db = new Database($config['database']);

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate form fields
    // ... Your existing validation code ...

    // Format date string to match the database format (Y-m-d)
    $dateString = $_POST['birthdate'];
    $date = DateTime::createFromFormat('d/m/Y', $dateString);
    if (!$date) {
        $errors['birthdate'] = "Ημερομηνία άκυρη.";
    } else {
        $birthdate = $date->format('Y-m-d');
    }

    // Validate duplicated email
    $email = $_POST['email'];
    $existingEmail = $db->query("SELECT email FROM STUDENTS WHERE email = :email", ["email" => $email])->fetch();
    if ($existingEmail) {
        $errors['email'] = "Η ηλεκτρονική διεύθυνση υπάρχει ήδη.";
    }

    if (empty($errors)) {
        $db->query("INSERT INTO STUDENTS (
            firstname, 
            lastname, 
            email, 
            city, 
            phone_number,
            sex,
            birthdate, 
            class_id) 
            VALUES (
                :firstname, 
                :lastname, 
                :email, 
                :city, 
                :phone_number,
                :sex,
                :birthdate,
                :class_id)", [
            'firstname' => $_POST['firstname'],
            'lastname' => $_POST['lastname'],
            'email' => $email,
            'city' => $_POST['city'],
            'phone_number' => $_POST['phone_number'],
            'sex' => $_POST['sex'],
            'birthdate' => $birthdate,
            'class_id' => 1
        ]);
    }
}

require("views/create.view.php");