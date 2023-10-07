<?php

// initalizing the path of the server
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];



// register routes
$Routes = [

    "/" => __DIR__ . "/views/pages/views.home.php",
    "/home" => __DIR__ . "/views/pages/views.home.php",
    "/signup" => __DIR__ . "/views/pages/views.signup.php",
    "/dashboard" => __DIR__ . "/views/pages/views.dashboard.php",
    "/profiles" => __DIR__ . "/views/pages/views.profiles.php",
    // "/test" => __DIR__ . "/views/pages/views.test.php",

];

// applying the conditions
if(array_key_exists($uri, $Routes)){
    require $Routes[$uri];
}else{
    require __DIR__ . '/views/error_pages/views.error.php';
}






?>