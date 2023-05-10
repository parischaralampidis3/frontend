<?php 

require "functions.php";


$uri = $_SERVER['REQUEST_URI'];

if($uri === '/'){
    require 'controllers/index.php';
} if($uri === '/about'){
    require 'controllers/about.php';
}if($uri === '/contact'){
    require 'controllers/contact.php';
}