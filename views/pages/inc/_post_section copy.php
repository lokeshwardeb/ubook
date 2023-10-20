<?php

$post_user_id = $_SESSION['login_user_id'];

$result = $controllers->get_data_where("post", "`post_user_id` = '$post_user_id'");

if ($result) {
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo $post_text = $row['post_text'];
            if ($post_text !== '') {
                echo $post_text;
            }
        }
    }
}



?>
<div class="container post_section mt-4 mb-4 pt-4 page">

    <div class="post_info"> <a href="" class="nav-link d-flex m-auto">
            <img src="" alt=" " class="img-fluid profile_img me-2 rounded-circle bg-light">
            <div class="posted_by"><?php echo $_SESSION['login_user_username'] ?></div>
            <div class="posted_by"><?php echo $_SESSION['login_user_id'] ?></div>
            <!-- <input type="text" class="form-control"> -->
        </a>
        <div class="poster_time text-secondary">8hr ago</div>
    </div>

    <hr>

    <div class="post_contents">
        <div class="post_text">

        </div>

        <div class="post_media_section container text-center pt-4 pb-4">
            <img src="/assets/img/assignment.png" alt="">
        </div>
    </div>


    <hr>


    <div class="actions_section text-center">
        <div class="row">
            <div class="col-4">
                <i class="fa-brands fa-gratipay text-danger"></i>

                3k
            </div>
            <div class="col-4 text-right">
                <i class="fa-regular fa-comment"></i>

                339
            </div>
            <div class="col-4">
                <i class="fa-solid fa-share"></i>

                564

            </div>
        </div>
    </div>

    <hr>



    <div class="actions_section text-center">
        <div class="row">
            <div class="col-4">

                <p>Like Count: <span id="like-count"><?php

                                                        if (isset($_SESSION['like_count'])) {
                                                            // echo $_SESSION['like_count'];

                                                            echo "0";
                                                        } else {
                                                            echo '0';
                                                        }

                                                        ?></span>
                    <input type="text" value="this1" id="text1">
                    <input type="text" value="this2" id="text2">
                <p id="result"></p>
                </p>
                <button id="like-button"><?php

                                            // echo 'like';

                                            if (isset($_SESSION['like_status'])) {
                                                echo $_SESSION['like_status'];
                                            } else {
                                                echo 'not like';
                                            }

                                            // if(isset($_SESSION['like_count'])){
                                            //     echo "Liked";
                                            //     unset($_SESSION['like_count']);
                                            // }else{
                                            //     echo 'Like';
                                            // }

                                            ?></button>

                <p>Dislike Count: <span id="dislike-count"><?php

                                                            if (isset($_SESSION['like_count'])) {
                                                                // echo $_SESSION['like_count'];
                                                                echo "0";
                                                            } else {
                                                                echo '0';
                                                            }

                                                            ?></span></p>
                <button id="dislike-button">Dislike</button>

                <script>
                    $('#button').click(function() {
                        var val1 = $('#text1').val();
                        var val2 = $('#text2').val();
                        $.ajax({
                            type: 'POST',
                            url: 'like.php',
                            data: {
                                text1: val1,
                                text2: val2
                            },
                            success: function(response) {
                                $('#result').html(response);
                            }
                        });
                    });
                </script>

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
                <form action="" method="post">
                    <button type="submit" class="btn btn-primary">
                        Like
                    </button>
                </form>





                <!-- <button type="button" class="btn like_button" onclick="lk_buttion()">
                    <i class="fa-regular fa-heart"></i>
                    <div class="inc"><i class="fa-regular fa-heart " id="like"></i></div>
<div class="brand_like d-none"><i class="fa-regular fa-heart text-danger " id="brand_like"></i></div>

<input type="text"  name="" id="" class="like_input_class_value">

<i class="fa-regular fa-heart text-danger d-none" id="not_liked"></i>
<i class="fa-brands fa-gratipay d-none text-dark" id="brand_like"></i>
Like
</button> -->
            </div>
            <div class="col-4" id="comment_section" onclick="comments()">
                <button type="button" class="btn ">
                    <i class="fa-regular fa-comment"></i>
                    Comment
                </button>
            </div>
            <div class="col-4">
                <button type="button" class="btn">
                    <i class="fa-solid fa-share"></i>
                    Share
            </div>
            </button>
        </div>

        <div id="write_comment" class="mt-4 d-none">
            <textarea name="" id="" cols="30" rows="10" placeholder="Write your comment" class="form-control mt-4 mb-4"></textarea>
            <button type="submit" class="btn btn-primary">Post</button>
        </div>

    </div>

    <hr>

</div>