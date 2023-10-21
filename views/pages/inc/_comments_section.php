<?php

require_once __DIR__ . '/../../../config/config.php';
require_once __DIR__ . '/../../../models/models.php';
require_once __DIR__ . '/../../../controllers/controllers.php';

$controllers = new controllers;

$comment_user_id = $_SESSION['login_user_id'];
$comment_user_name = $_SESSION['login_user_username'];

 $comment_post_id = $controllers->pure_data($_GET['post_id']);
//  $more_comment = $controllers->pure_data($_GET['more_comment']);

//  checking if the comment id is selected or if the comment id isset

//  if(!isset($_GET['post_id'])){

//     // that means if the comment id is not set then it will redirect on the dashboard page
//     // otherwise it will continue the process and the execution

//     echo '
    
//     <script>
    
//     window.location.href="/dashboard"

//     </script>
    
//     ';
//  }

 if(isset($_GET['more_comment'])){
$result = $controllers->get_data_where("comments", "`comment_post_id` = '$comment_post_id'", "Order By", "`comments`.`comment_id` DESC");

// echo "more comment selected";

 }else{
    // that means if the more comment is not set
    $result = $controllers->get_data_where("comments", "`comment_post_id` = '$comment_post_id'", "Order By", "`comments`.`comment_id` DESC", "LIMIT 2");

// echo "more comment is not selected";


 }


if ($result) {
    if ($result->num_rows > 0) {
        echo '<div class="post_section comment_section text-center text-secondary justify-content-center mt-5 pt-5">

        <span class="text-start mb-5 pb-5"><a href="/dashboard" class="nav-link"><button class="btn btn-primary">Back</button></a></span>

     ';

     while ($row = $result->fetch_assoc()) {
        // comment post id is the post id which has the comment and showed
       $comment_post_id = $row['comment_post_id'];

        // comment user id is the user id who has posted a comment on the post
        $comment_user_id = $row['comment_user_id'];

        // $post_id = $row['post_id'];

 
        
        echo '
        
        <div class="text-center mt-5 container mb-5 page pb-5">
        <div class="comment_info container d-flex">
        <div class="comment_user_img">
        <img src="" class="img-fluid rounded-circle profile_img bg-secondary" alt="c_i">
        </div>
        <div class="ms-4 comment_username">
        Lokeshwar Deb
        </div>
        </div><hr>
      <hr>

        <div class="comment_text mt-4 pt-4">
        '.$row['comment_text'].'
        </div>
        
        </div>';


        


    //     echo '
        
     

    //   ';


        // if ($post_text !== '') {
        //     echo $post_text;
        //     echo '



        //     ';
        // }
    }

     echo '
</div>';

        
    }else{
        echo '<div class="post_section container comment_section text-center text-secondary justify-content-center mt-5 pt-5">
        <span class="text-start mb-5 pb-5"><a href="/dashboard" class="nav-link"><button class="btn btn-primary">Back</button></a></span>
        <div class="text-center mt-5 pt-5 mb-5 pb-5">No comments found</div>
    
</div>';
    }

    // insert comments

    // $controllers->add_comments();

    $controllers->add_comments();

    
// add comments
// echo '
// <div id="write_comment" class="mt-4 d-none write_comment">
//         <form class="comment_form">

//         <textarea name="comment_text" id=""  cols="30" rows="10" placeholder="Write your comment" class="form-control comment_text mt-4 mb-4"></textarea>
   

//         <button type="submit" class="btn btn-primary comment_submit" name="comment_submit" class="comment_submit">Post</button>
//         </form>
//     </div>

// ';



}



?>


<div id="write_comment" class="mt-4 pt-4 mb-5 pb-5 container write_comment">
        <form class="comment_form" action="" method="post">

        <textarea name="comment_text" id=""  cols="30" rows="10" placeholder="Write your comment" class="form-control comment_text mt-4 mb-4"></textarea>
        <input type="hidden" name="comment_post_id" id="" value="<?php echo $comment_post_id ?>">
        <input type="hidden" name="comment_user_id" id="" value="<?php echo $comment_user_id ?>">
        <input type="hidden" name="comment_user_name" id="" value="<?php echo $comment_user_name ?>">
   

        <button type="submit" class="btn btn-primary comment_submit" name="submit_comment" class="comment_submit">submit comment</button>
        </form>
    </div>

    <form action="" method="get">
        <input type="hidden" name="post_id" id="" value="<?php echo $comment_post_id ?>">
        <input type="hidden" name="more_comment" id="" value="view&sho&co&more">

        <button type="submit" class="btn btn-primary mt-4 <?php 
        
        if(isset($_GET['more_comment'])){
            echo 'd-none';
        }
        
        
        ?>  mb-5 ">More comments</button>
    </form>




            </div>


<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
<script src="/assets/js/jquery_3.6.0.min.js"></script>

<script>
    $(document).ready(function () {
        $('.submitBtn').click(function () {
            var post_id = $(this).closest('form').find('.post_id').val();
            var like_status = $(this).closest('form').find('.like_status').val();
            var submitBtn = $(this).closest('form').find('.submitBtn');
            // var like_value = $(this).closest('div').find('.like_value');
            // var like_section = $(this).closest('like_section').find


            // var resultMessage = $(this).closest('form').siblings('.resultMessage').val();
            var resultMessage = $(this).closest('form').siblings('.resultMessage');
            // var age = $(this).closest('form').find('.age').val();
            // var location = $(this).closest('form').find('.location').val();

            $.ajax({
                url: '/process', // Replace with your PHP script URL
                method: 'POST', // Use POST or GET, depending on your needs
                data: {
                    post_id: post_id,
                    like_status: like_status
                },
                success: function (response) {
                    // Handle the response from the PHP script
                    console.log(response);
                    // resultMessage.text(response).fadeIn();
                    submitBtn.text(response).fadeIn();
                    // like_value.text("1added").fadeIn();
                }
            });
        });

        $('.comment_submit').click(function () {
            var post_id = $(this).closest('form').find('.post_id').val();
            var comment_text = $(this).closest('form').find('.comment_text').val();
            var comment_submit = $(this).closest('form').find('.comment_submit');
            // var resultMessage = $(this).closest('form').siblings('.resultMessage').val();
            var resultMessage = $(this).closest('form').siblings('.resultMessage');
            // var age = $(this).closest('form').find('.age').val();
            // var location = $(this).closest('form').find('.location').val();

            $.ajax({
                url: '/comment', // Replace with your PHP script URL
                method: 'POST', // Use POST or GET, depending on your needs
                data: {
                    post_id: post_id,
                    comment_text: comment_text
                },
                success: function (response) {
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