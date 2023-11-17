<?php

require_once __DIR__ . '/../../config/config.php';
require_once __DIR__ . '/../../models/models.php';
require_once __DIR__ . '/../../controllers/controllers.php';
$controllers = new controllers;


$ajax_function = $_GET['ajax_function'];

if($ajax_function == 'profile_bio_update'){
$controllers->profile_bio_update();
// echo "Welcome to bio update"    ;

}

if($ajax_function == 'like_count_update'){
    // echo "welcome to like count";
    $controllers->like_count_update();
}

?>