<?php
session_start();
require_once __DIR__ . '/../../../config/config.php';
require_once __DIR__ . '/../../../models/models.php';
require_once __DIR__ . '/../../../controllers/controllers.php';

$controllers = new controllers;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $post_id = $_POST['post_id'];
    $like_status = $_POST['like_status'];
    $like_user_id = $_SESSION['login_user_id'];

   $result = $controllers->get_data_where("likes", "`like_user_id` = '$like_user_id' AND `like_post_id` = '$post_id'");

   if($result){
    if($result->num_rows > 0){
       
        while($row = $result->fetch_assoc()){
            $check_like_id = $row['like_id'];
            $controllers->delete_where("likes", "`like_id` = '$check_like_id'");
            // echo "like has been deleted";
            echo "Like";
        }

    }else{
        $result = $controllers->insert("likes", "`like_post_id`, `like_user_id`", "'$post_id', '$like_user_id'");

        if($result){
            // echo "like inserted"; 
            echo "Liked"; 
        }else{
            echo "like not inserted";
        }
    }
   }

    // Perform any processing or validation you need
    // For example, you can save the data to a database

    // Return a response (e.g., success or an error message)
    // echo "Data received successfully: post_id = $post_id, like_status = $like_status";



    // working with the comment section

    // $comment_text = $_POST['comment_text'];

    // echo "data recived comment_text = " . $comment_text;





} else {
    echo "Invalid request method";
}
?>
