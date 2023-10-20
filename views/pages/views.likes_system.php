<!-- <?php
session_start();



?>

<!DOCTYPE html>
<html>
<head>
    <title>Like/Dislike System</title>
</head>
<body>
    <h1>Like/Dislike System</h1>

    <p>Like Count: <span id="like-count"><?php 
    
    if(isset($_SESSION['like_count'])){
        echo $_SESSION['like_count'];
    }else{
        echo '0';
    }
    
    ?></span></p>
    <button id="like-button"><?php

    echo 'like';
    
    // if(isset($_SESSION['like_count'])){
    //     echo "Liked";
    //     unset($_SESSION['like_count']);
    // }else{
    //     echo 'Like';
    // }

    ?></button>
    
    <p>Dislike Count: <span id="dislike-count"><?php 
    
    if(isset($_SESSION['like_count'])){
        echo $_SESSION['dislike_count'];
    }else{
        echo '0';
    }
    
    ?></span></p>
    <button id="dislike-button">Dislike</button>

    <script>
        // JavaScript code for handling the like button click
        document.getElementById("like-button").addEventListener("click", function() {
            // Send an Ajax request to like.php
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "./like", true);
            xhr.send();

            // Update like count after the request is completed
            xhr.onload = function() {
                if (xhr.status === 200) {
                    document.getElementById("like-count").textContent = xhr.responseText;
                }
            };
        });

        // JavaScript code for handling the dislike button click
        document.getElementById("dislike-button").addEventListener("click", function() {
            // Send an Ajax request to dislike.php
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "./dislike", true);
            xhr.send();

            // Update dislike count after the request is completed
            xhr.onload = function() {
                if (xhr.status === 200) {
                    document.getElementById("dislike-count").textContent = xhr.responseText;
                }
            };
        });
    </script>
</body>
</html> -->
