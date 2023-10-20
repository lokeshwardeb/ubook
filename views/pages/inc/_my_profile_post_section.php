<?php

$post_user_id = $_SESSION['login_user_id'];

$result = $controllers->get_data_where("post", "`post_user_id` = '$post_user_id'");

if ($result) {
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
             $post_text = $row['post_text'];
             $post_media = $row['post_media'];
             $post_id = $row['post_id'];



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

            ';

            ?>

            <?php

$result_like_count = $controllers->get_data_where("likes", "`like_post_id` = '$post_id'");

if($result_like_count){
    if($result_like_count->num_rows > 0){
        echo $result_like_count->num_rows;

    }else{
        echo '0';
    }
}


            echo '
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

   

    <form class="myForm">
    <input type="hidden" name="post_id" class="post_id" placeholder="post_id" value="'. $post_id .'">
    <input type="hidden" name="like_status" class="like_status" placeholder="like_status">
    ';

    ?>
    <?php

    $like_user_id = $_SESSION['login_user_id'];

    $result_like = $controllers->get_data_where("likes", "`like_user_id` = '$like_user_id' AND `like_post_id` = '$post_id'");

    if($result_like){
        if($result_like->num_rows > 0){
            echo '

    <button type="button" class="submitBtn btn btn-outline-primary" >Liked</button>

            
            ';
        }else{
            echo '
    <button type="button" class="submitBtn btn btn-outline-primary" >Like</button>
            
            ';
        }
    }

    echo '
</form>
<div class="resultMessage" style="display: none;"></div>


           
          





   
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
        <form class="comment_form">

        <textarea name="comment_text" id=""  cols="30" rows="10" placeholder="Write your comment" class="form-control comment_text mt-4 mb-4"></textarea>
    <input type="text" name="post_id" class="post_id" placeholder="post_id" value="'. $post_id .'">

        <button type="button" class="btn btn-primary comment_submit" name="comment_submit" class="comment_submit">Post</button>
        </form>
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

<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
<script src="/assets/js/jquery_3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
    $('.submitBtn').click(function() {
        var post_id = $(this).closest('form').find('.post_id').val();
        var like_status = $(this).closest('form').find('.like_status').val();
        var submitBtn = $(this).closest('form').find('.submitBtn');
        // var resultMessage = $(this).closest('form').siblings('.resultMessage').val();
        var resultMessage = $(this).closest('form').siblings('.resultMessage');
        // var age = $(this).closest('form').find('.age').val();
        // var location = $(this).closest('form').find('.location').val();

        $.ajax({
            url: '/process',  // Replace with your PHP script URL
            method: 'POST',      // Use POST or GET, depending on your needs
            data: {
                post_id: post_id,
                like_status: like_status
            },
            success: function(response) {
                // Handle the response from the PHP script
                console.log(response);
                // resultMessage.text(response).fadeIn();
                submitBtn.text(response).fadeIn();
            }
        });
    });

    $('.comment_submit').click(function(){
        var post_id = $(this).closest('form').find('.post_id').val();
        var comment_text = $(this).closest('form').find('.comment_text').val();
        var comment_submit = $(this).closest('form').find('.comment_submit');
        // var resultMessage = $(this).closest('form').siblings('.resultMessage').val();
        var resultMessage = $(this).closest('form').siblings('.resultMessage');
        // var age = $(this).closest('form').find('.age').val();
        // var location = $(this).closest('form').find('.location').val();

        $.ajax({
            url: '/comment',  // Replace with your PHP script URL
            method: 'POST',      // Use POST or GET, depending on your needs
            data: {
                post_id: post_id,
                comment_text: comment_text
            },
            success: function(response) {
                // Handle the response from the PHP script
                // console.log(response);
                // resultMessage.text(response).fadeIn();
                // submitBtn.text(response).fadeIn();
                console.log(response);
            }
        });
    })
});

</script>


<!-- 
<script>
    $(document).ready(function() {
    $('.submitBtn').click(function() {
        var name = $('.name').val();
        var email = $('.email').val();

        $.ajax({
            url: '/process',  // Replace with your PHP script URL
            method: 'POST',      // Use POST or GET, depending on your needs
            data: {
                name: name,
                email: email
            },
            success: function(response) {
                // Handle the response from the PHP script
                console.log(response);
            }
        });
    });
});

</script> -->
