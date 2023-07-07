<?php

$routes = require('routes.php'); 



//refactor the router;
//set an associative array with path and  uri 
$routes = [
    '/' => "controllers/index.php",
    '/about' => "controllers/about.php",
    '/contact' => "controllers/contact.php",
    '/students' => "controllers/students.php",
    '/student' => "controllers/student.php",
    '/create' =>  "controllers/create.php"
];



function routeToController($uri, $routes){

if(array_key_exists($uri,$routes)){
    require $routes[$uri];
}else{
 abort();   
}


}


$uri = parse_url($_SERVER["REQUEST_URI"])["path"];

routeToController($uri, $routes);

 function abort($code = 404){
    http_response_code($code);
    require "views/{$code}.php";
   
}