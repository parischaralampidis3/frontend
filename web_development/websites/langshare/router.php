<?php


$uri = parse_url($_SERVER["REQUEST_URI"])["path"];


//refactor the router;
//set an associative array with path and  uri 
$routes = [
    '/' => "controllers/index.php",
    '/about' => "controllers/about.php",
    '/contact' => "controllers/contact.php",
    '/students' => "controllers/students.php",
    '/student' => "controllers/student.php"
];


 function abort($code = 404){
    http_response_code($code);
    require "views/{$code}.php";
   
}

function routeToController($uri, $routes){

if(array_key_exists($uri,$routes)){
    require $routes[$uri];
}else{
 abort();   
}


}

routeToController($uri, $routes);
