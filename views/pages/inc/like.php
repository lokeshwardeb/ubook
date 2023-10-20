<?php

// require_once __DIR__ . "/../../../config/config.php";
// require_once __DIR__ . "/../../../models/models.php";
// require_once __DIR__ . "/../../../controllers";

// $controllers = new controllers;


session_start();


$text1 = $_POST['text1'];
$text2 = $_POST['text2'];
echo $text1 + $text2;

if (!isset($_SESSION['like_count'])) {
    $_SESSION['like_count'] = 0;
}
else{
    // that means the like is selected
    
    // echo $_SESSION['like_count'];
    // echo $_SESSION['like_count'];

    // $_SESSION['like_count']++;

    echo $_SESSION['like_count'];
    echo $_SESSION['like_status'] = 'liked';

   
  
   
   
//     $_SESSION['like_count']++;

//     // $controllers->insert("likes")


// echo $_SESSION['like_count'];


}


//  echo "this";

   
// $_SESSION['like_count']++;

// $controllers->insert("likes")


// $_SESSION['like_count'];


// $_SESSION['like_count']++;

// echo $_SESSION['like_count'];

// unset($_SESSION['like_count']);