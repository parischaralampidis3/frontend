<?php

function dd($value){
   
    var_dump($value);
    die();
   
   
}


function url( $value){
 return $_SERVER['REQUEST_URI'] === $value;
}



?>