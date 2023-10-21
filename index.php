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
    "/like" => __DIR__ . "/views/pages/inc/like.php",
    "/dislike" => __DIR__ . "/views/pages/inc/dislike.php",
    "/process" => __DIR__ . "/views/pages/inc/process.php",
    "/inc_post_page" => __DIR__ . "/views/pages/inc/_post_page.php",
    "/comment.php" => __DIR__ . "/views/pages/inc/comment.php",
    "/logout" => __DIR__ . "/views/pages/views.logout.php",
    "/like_func" => __DIR__ . "/views/pages/views.likes_system.php",
    "/comments" => __DIR__ . "/views/pages/views.comments.php",
    "/copy_link" => __DIR__ . "/views/pages/views.copy_link.php",
    "/post_page" => __DIR__ . "/views/pages/views.post_page.php",
    // "/test" => __DIR__ . "/views/pages/views.test.php",

];

// applying the conditions
if(array_key_exists($uri, $Routes)){
    require $Routes[$uri];
}else{
    require __DIR__ . '/views/error_pages/views.error.php';
}






?>