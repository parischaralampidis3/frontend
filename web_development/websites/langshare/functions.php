<?php

function dd($value){   
var_dump($value);
die();
}

function url( $value){
 return $_SERVER['REQUEST_URI'] === $value;
}

function base_path($path){
return BASE_PATH . $path;
}

function view($path,$attributes= []){
    extract($attributes);
    return require base_path('views/' . $path);
}

?>