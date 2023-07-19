<?php

$config = require("config.php");
$db = new Database($config['database']);

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate form fields
    if (strlen($_POST['firstname']) === 0) {
        $errors['firstname'] = "Firstname is required";
    } else if (strlen($_POST['lastname']) === 0) {
        $errors['lastname'] = "Last name is required";
    } else if ( $_POST['email'] === "") {
        $errors['email'] = "Email is required";
    } else if (strlen($_POST['firstname']) > 16) {
        $errors['firstname'] = "First name can't be more than 16 characters";
    } else if (strlen($_POST['lastname']) > 16) {
        $errors['lastname'] = "Last name can't be more than 16 characters";
    }

    // Validate duplicated email
    $email = $_POST['email'];


    $existingEmail = $db->query("SELECT email FROM STUDENTS WHERE email = :email ", ["email" => $email])->fetch();

    if ($existingEmail) {
        $errors['email'] = 'Email user already exists! ';
    }

    

    if (empty($errors)) {
        $db->query("INSERT INTO STUDENTS (firstname, lastname, email, city, phone_number,sex, class_id) VALUES (:firstname, :lastname, :email, :city, :phone_number,:sex, :class_id)", [
            'firstname' => $_POST['firstname'],
            'lastname' => $_POST['lastname'],
            'email' => $email,
            'city' => $_POST['city'],
            'phone_number' => $_POST['phone_number'],
            'sex' => $_POST['sex'],
            'class_id' => 1
        ]);

        // Redirect to success page or display success message
        // header("Location: success.php");
        // exit;
    }
}

require("views/create.view.php");