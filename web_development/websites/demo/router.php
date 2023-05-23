<?php

$uri = parse_url( $_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/notes' => 'controllers/notes.php',
    '/note' => 'controllers/note.php',
    '/contact' => 'controllers/contact.php',
    
];

if( array_key_exists($uri, $routes)){
    require $routes[$uri];
}else{
    http_response_code(404);
   require 'views/404.php';
    die();
}


function routeToController($uri, $routes){
    if( array_key_exists($uri, $routes)){
    require $routes[$uri];
}else{  
    abort( );
}
}