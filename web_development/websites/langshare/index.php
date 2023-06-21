<?php

$name = 'Paris';
$bool = false;


if ($bool) {
    $message = "you guessed the name" . " $name ";
} else {
    $message = "The name is not"  . " $name";
}
?>


<?= $message; ?>