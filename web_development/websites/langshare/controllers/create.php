<?php

$config = require("config.php");
$db = new Database($config['database']);

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate form fields
    if (strlen($_POST['firstname']) === 0) {
        $errors['firstname'] = "Το όνομα είναι απαραίτητο.";
    } else if (strlen($_POST['lastname']) === 0) {
        $errors['lastname'] = "Το επώνυμο είναι απαραίτητο.";
    } else if ($_POST['email'] === "") {
        $errors['email'] = "Η ηλεκτρονική διεύθυνση είναι απαραίτητη.";
    } else if (strlen($_POST['firstname']) > 16) {
        $errors['firstname'] = "Το όνομα δεν μπορεί να είναι μεγαλύτερο από 16 χαρακτήρες.";
    } else if (strlen($_POST['lastname']) > 16) {
        $errors['lastname'] = "Το επώνυμο δεν μπορεί να είναι μεγαλύτερο από 16 χαρακτήρες.";
    } else if (strlen($_POST['phone_number']) >= 11) {
        $errors['phone_number'] = "Ο αριθμός τηλεφώνου δεν μπορεί να είναι μεγαλύτερος από 16 ψηφία.";
    } 
    ;


    // Format date string to match the database format (Y-m-d)
    $dateString = $_POST['birthdate'];
    $date = DateTime::createFromFormat("d/m/Y", $dateString);
    if (!$date) {
        $errors['birthdate'] = "Ημερομηνία άκυρη.";
    } else {
        $birthdate = $date->format("Y-m-d"); // Change 'd-m-Y' to 'd/m/Y' if needed
    }
    ;



    // Validate duplicated email
    $email = $_POST['email'];

    $existingEmail = $db->query("SELECT email FROM STUDENTS WHERE email = :email ", ["email" => $email])->fetch();

    if ($existingEmail) {
        $errors['email'] = "Η ηλεκτρονική διεύθυνση υπάρχει ήδη.";
    }


    if (empty($errors)) {
        $db->query("INSERT INTO STUDENTS (
            firstname, 
            lastname, 
            email, 
            city,
            address,
            postal_code,
            phone_number,
            sex,
            birthdate,
            class_id) 
            VALUES (
                :firstname, 
                :lastname, 
                :email, 
                :city,
                :address, 
                :postal_code,
                :phone_number,
                :sex,
                :birthdate,
                :class_id)", [
            'firstname' => $_POST['firstname'],
            'lastname' => $_POST['lastname'],
            'email' => $email,
            'city' => $_POST['city'],
            'address'=>$_POST['address'],
            'postal_code' => $_POST['postal_code'],
            'phone_number' => $_POST['phone_number'],
            'sex' => $_POST['sex'],
            'birthdate' => $birthdate,
            'class_id' => 1
        ]);
    }
    ;
}



require("views/create.view.php");