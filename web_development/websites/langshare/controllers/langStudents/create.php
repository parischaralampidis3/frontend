<?php

require base_path("Validator.php");
$config = require base_path("config.php");

$db = new Database($config['database']);
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {


 // Validate form fields
    if(! Validator::string($_POST['lastname'],1 , 16 ) || ! Validator::string($_POST['lastname'],1,16)){
        $errors['lastname'] = "Απαιτείται ένα όνομα και επώνυμο το οποίο δεν θα υπερβαίνει τους 16 χαρακτήρες.";
    }
    else if ($_POST['email'] === "") {
        $errors['email'] = "Η ηλεκτρονική διεύθυνση είναι απαραίτητη.";
    } else if (!Validator::phone_number($_POST['phone_number'],1,16)) {
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
view("langStudents/create.view.php");