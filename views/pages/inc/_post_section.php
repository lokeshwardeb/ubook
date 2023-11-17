<?php

$post_user_id = $_SESSION['login_user_id'];

$result = $controllers->get_data_where("post", "`post_user_id` = '$post_user_id'");

if ($result) {
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
             $post_text = $row['post_text'];
             $post_media = $row['post_media'];



            echo '
            
            <div class="container post_section mt-4 mb-4 pt-4 page">

<div class="post_info"> <a href="" class="nav-link d-flex m-auto">
        <img src="" alt=" " class="img-fluid profile_img me-2 rounded-circle bg-light">
        <div class="posted_by"> ' . $_SESSION['login_user_username'] .'</div>
        <div class="posted_by">' . $_SESSION['login_user_id'] . '</div>
        <!-- <input type="text" class="form-control"> -->
    </a>
    <div class="poster_time text-secondary">8hr ago</div>
</div>

<hr>

<div class="post_contents">
    <div class="post_text">
';?>


<?php

if($post_text !== ''){
echo $post_text;
}


echo '
    </div>

    <div class="post_media_section container text-center pt-4 pb-4">
        <img src="/storage/uploads/'. $post_media .'" alt="">
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

            <p>Like Count: <span id="like-count"></span>
                <input type="text" value="this1" id="text1">
                <input type="text" value="this2" id="text2">
            <p id="result"></p>
            </p>
            <input type="text" value="' . $_SESSION['login_user_id'] . '">
            <button id="like-button" class="btn btn-outline-primary" type="button">Like </button>

            <p>Dislike Count: <span id="dislike-count"></span></p>
            <button id="dislike-button">Dislike</button>



           
            <form action="" method="post">
                <button type="submit" class="btn btn-primary">
                    Like
                </button>
            </form>





   
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

            ';


            // if ($post_text !== '') {
            //     echo $post_text;
            //     echo '
                
                
                
            //     ';
            // }
        }
    }
}



?>
