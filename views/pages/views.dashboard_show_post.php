<?php


// create post section starts here

require_once __DIR__ . '/inc/_create_post.php';




// create post section ends here





?>


<div class="mt-4 mb-4 post_status">
    <?php

    // if(isset($_SESSION['post_status'])){
    //     unset($_SESSION['post_status'] );
    //     // header('location: /dashboard');
    //     echo '

    //     <script>

    //     window.location.href = "/dashboard"

    //     </script>

    //     ';
    // }

    $controllers->create_post();

    if (isset($_SESSION['post_status'])) {
        unset($_SESSION['post_status']);
        // header('location: /dashboard');
        echo '
                
                <script>
                
                window.location.href = "/dashboard"
            
                </script>
            
                ';
    }


    ?>
</div>



<div class="create_post_section d-flex bg-light m-auto">

    <button type="button" class="btn text-center m-auto btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <div href="" class="nav-link d-flex m-auto">
            <img src="" alt=" " class="img-fluid profile_img rounded-circle bg-light">
            <div class="input">

                Write what's on your mind, <?php echo $_SESSION['login_user_username'] ?>?

                <!-- <input type="text" class="form-control post_input" placeholder="Write what's on your mind, Lokeshwar?" disabled> -->


            </div>
            <!-- <input type="text" class="form-control"> -->
        </div>
</div>
</button>


<?php

$models = new models;


// $result = $models->join_data("users", "post", "user.user_id = post.post_id") 
$post_user_id = $_SESSION['login_user_id'];
$result = $models->get_data_where("post", "`post_user_id` = '$post_user_id' ", "ORDER BY", "`post`.`post_id` DESC");

if ($result) {
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

            $row['posted_by'];

            echo '
                
                <div class="container post_section mt-4 mb-4 pt-4 page">

                <div class="post_info"> <a href="" class="nav-link d-flex m-auto">
                        <img src="" alt=" " class="img-fluid profile_img me-2 rounded-circle bg-light">
                        <div class="posted_by">' . $row['posted_by'] . '</div>
                        <!-- <input type="text" class="form-control"> -->
                    </a>
                    <div class="poster_time text-secondary">8hr ago</div>
                </div>

                <hr>

                <div class="post_contents">
                    <div class="post_text">
                        ' . $row['post_text'] . '
                    </div>

                    <div class="post_media_section container text-center pt-4 pb-4">
                    
                    ';

            if ($row['post_media_type'] == 'png' || $row['post_media_type'] == 'jpg' || $row['post_media_type'] == 'jpeg') {
                echo '<img src="/storage/uploads/' . $row['post_media'] . '" alt="">';
            } elseif ($row['post_media_type'] == 'mp3' || $row['post_media_type'] == 'mp4' || $row['post_media_type'] == 'mkv') {

                echo '
                        
                        <video width="320" height="240" controls>
                        
                        <source src="<img src="/storage/uploads/' . $row['post_media'] . '" type="video/' . $row['post_media_type'] . '">
                        

                      </video>';
            } elseif ($row['post_media_type'] == '') {
            }

            echo '

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
                            <button type="button" class="btn" onclick="like()">
                                <!-- <i class="fa-regular fa-heart"></i> -->
                                <i class="fa-regular fa-heart " id="like"></i>
                                <i class="fa-regular fa-heart text-danger d-none" id="brand_like"></i>
                                <!-- <i class="fa-regular fa-heart text-danger d-none" id="not_liked"></i> -->
                                <!-- <i class="fa-brands fa-gratipay d-none text-dark" id="brand_like"></i> -->
                                <input type="hidden" id="like_input" value="">
                                Like
                        </div>
                        </button>
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
                
                
                
                
                ';


            // echo $row['post_text'];
            // echo $row['post_media'];

        }
    }
}



?>