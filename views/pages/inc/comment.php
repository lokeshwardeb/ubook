<?php
session_start();
require_once __DIR__ . '/../../../config/config.php';
require_once __DIR__ . '/../../../models/models.php';
require_once __DIR__ . '/../../../controllers/controllers.php';

$controllers = new controllers;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $post_id = $_POST['post_id'];

    // working with the comment section

    $comment_text = $_POST['comment_text'];

    echo "data recived comment_text = " . $comment_text;





} else {
    echo "Invalid request method";
}
?>
