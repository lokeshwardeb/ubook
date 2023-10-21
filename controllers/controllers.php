<?php

require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../models/models.php';


class controllers extends models
{

    public function alert($alert_type, $alert_data)
    {
        if ($alert_type == 'success') {
            return ('<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success !!</strong> ' . $alert_data . '
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>');
        }
        if ($alert_type == 'danger') {
            return ('<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error !!</strong> ' . $alert_data . '
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>');
        }
    }

    public function alert_session($alert_type)
    {
        if ($alert_type == 'success') {
            if (isset($_SESSION['alert_message'])) {
                //  $alert_data = $_SESSION['alert_message'];

                // Display the alert using JavaScript
                echo ('<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success !!</strong> ' . $_SESSION['alert_message'] . '
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>');

                // Clear the session variable to prevent the message from showing again
                unset($_SESSION['alert_message']);
            }
        }
        if ($alert_type == 'danger') {
            if (isset($_SESSION['alert_message'])) {
                // $_SESSION['alert_message'] = $alert_data;

                // Display the alert using JavaScript
                return ('<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Success !!</strong> ' . $_SESSION['alert_message'] . '
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>');

                // Clear the session variable to prevent the message from showing again
                unset($_SESSION['alert_message']);
            }
        }
    }


    public function check_login()
    {

        if (!isset($_SESSION['login_status'])) {
            echo '

            <script>
            
            document.location.href = "/";
            
            </script>
            
            ';
        }
    }

    public function add_comments(){

        // if(isset($_POST['more_comments'])){
        //     echo 'more comments';

        //     $comment_post_id = $this->pure_data($_POST['comment_post_id']);

        //     $result = $this->get_data_where("comments", "`comment_post_id` = '$comment_post_id'");

        //     if($result){
        //         if($result->num_rows > 0){

        //         }
        //     }


        // }


        if(isset($_POST['submit_comment'])){
            $comment_post_id = $this->pure_data($_POST['comment_post_id']);
            $comment_user_id = $this->pure_data($_POST['comment_user_id']);
            $comment_user_name = $this->pure_data($_POST['comment_user_name']);
            $comment_text = $this->pure_data($_POST['comment_text']);

            // add the comment on the db
          $result = $this->insert("comments", " `comment_post_id`, `comment_user_id`, `comment_user_name`, `comment_text`", "'$comment_post_id','$comment_user_id','$comment_user_name','$comment_text'");

          if($result){
            echo $this->alert("success", "The comment has been posted successfully ! Please reload the page to see the changes !");
            // echo '
            
            // <script>
            // window.location.reload()
            // </script>
            
            // ';
          }else{
            echo $this->alert("danger", "The comment has not been posted successfully ! Please try again later !");
          }



        }

        // echo "this";

    }


public function create_post(){

    if(isset($_POST['create_post'])){

    if(!isset($_SESSION['posted'])){
            // if the create_post button is clicked

            $post_text = $this->pure_data($_POST['post_text']);
            $post_media = $_FILES['post_media']['name'];
     
            $post_media_tmp = $_FILES['post_media']['tmp_name'];
     
            $post_user_id = $_SESSION['login_user_id'];

            $posted_by = $_SESSION['login_user_username'];
     
             // get the file extension
             $post_media_type =  pathinfo($post_media, PATHINFO_EXTENSION);
            
             // giving the file main name;
     
           $file_main_name = 'post_' . $_SESSION['login_user_id'] . '_' . rand(111111, 999999) . '_' . $post_media;
     
           $upload_dir = __DIR__ . '/../storage/uploads/';
           $upload_file_name = $upload_dir . $file_main_name ;
     
            if($post_media !== ''){
             // that means the media is selected and uploading media file
             if(move_uploaded_file($post_media_tmp, $upload_file_name)){
             //  return $this->alert("post has been uploaded");
     
             // echo 'post uploaded';
     
             
     
             echo $this->alert("success", "Uploaded the file successfully");
     
             // '<script>
             // window.location.reload();
             // </script>';
     
             $_SESSION['post_status'] = 'posted';
     
     
             // inserting the data in db
             $result = $this->insert("post", " `post_user_id`, `posted_by`, `post_text`, `post_media`, `post_media_type`", "'$post_user_id', '$posted_by', '$post_text','$file_main_name','$post_media_type'");
     
             if($result){
                 echo $this->alert("success", "Posted successfully");
             }else{
                 echo $this->alert("danger", "Cannot posted successfully");
             }
     
     
     
     
     
             }
     
            }else{
             // that means the media file is not selected and not uploading media file. Only creating text post on UBook
             
             $_SESSION['post_status'] = 'posted';
     
     
             // inserting the data in db
             $result = $this->insert("post", " `post_user_id`, `posted_by`, `post_text`", "'$post_user_id', '$posted_by', '$post_text'");
     
             if($result){
                 echo $this->alert("success", "Posted successfully");
             }else{
                 echo $this->alert("danger", "Cannot posted successfully");
             }
     
     
            }
     
     
          
    }else{
        unset($_SESSION['post_status'] );
        // header('location: /dashboard');
        echo '
        
        <script>
        
        window.location.href = "/dashboard"
    
        </script>
    
        ';
    }




    }




     
}



    public function login()
    {

        // function for the login process
        if (isset($_POST['login_ubook'])) {

            $email_or_phone_no = $this->pure_data($_POST['email_or_phone_no']);
            $password = $this->pure_data($_POST['password']);

            // converting the hash password into the verified password
            $verify_password = '';

            // searching if there exist the user with the phone_on or email address

            $result = $this->get_data_where("users", "`user_email` = '$email_or_phone_no' OR `user_phone_no` = '$email_or_phone_no'");

            if ($result) {
                if ($result->num_rows == 1) {
                    // that means the user exist on the ubook
                    while ($row = $result->fetch_assoc()) {
                        $db_hash_password = $row['password'];
                        $db_user_name = $row['user_name'];
                        $db_user_id = $row['user_id'];

                        if (password_verify($password, $db_hash_password)) {
                            // that means the password matched

                            echo $this->alert("success", "Logged in successfully");
                            $_SESSION['login_status'] = true;
                            $_SESSION['login_user_email_or_phone_no'] = $email_or_phone_no;
                            $_SESSION['login_user_username'] = $db_user_name;
                            $_SESSION['login_user_id'] = $db_user_id;

                            header("location: ./dashboard");
                        } else {
                            // that means the password does not matched

                            echo $this->alert("danger", "Password not matched !! Please enter the correct password");
                        }
                    }
                } else {
                    // that means the user not exist on the ubook

                    echo $this->alert("danger", "The user does not exist on UBook. Please give the correct user info to login.");
                }
            }
        }
    }

    public function signup()
    {

        if (isset($_POST['signup_ubook'])) {

            $user_name = $this->pure_data($_POST['user_name']);
            $email_or_phone_no = $this->pure_data($_POST['email_or_phone_no']);
            $password = $this->pure_data($_POST['password']);
            $cpassword = $this->pure_data($_POST['cpassword']);
            $your_role = $this->pure_data($_POST['your_role']);
            $other_role = $this->pure_data($_POST['other_role']);
            $department = $this->pure_data($_POST['department']);


            // the user submit checking starts here

            // checking if the value is an email
            $check_valid_email = filter_var($email_or_phone_no, FILTER_VALIDATE_EMAIL);


            if ($check_valid_email) {
                // that means this is a email

                // that means the user has submited email address

                $user_submitted_status_email_or_phone_no = 'email';


                // echo $this->alert("success", "submited email address");
                // exit;

            }

            $check_valid_phone = preg_replace('/[^0-9]/', '', $email_or_phone_no);

            $phone_no_length = strlen($email_or_phone_no);


            if ($check_valid_email == false) {

                if ($check_valid_phone && strlen($email_or_phone_no) <= 11) {
                    // that means this is a phone no

                    // that means the user has submited phone no
                    echo $check_valid_phone;

                    $user_submitted_status_email_or_phone_no = 'phone_no';

                    //   $_SESSION['alert_message'] = 'phone';
                    // echo  $this->alert("success", "This is a phone message");


                } else {
                    echo 'this is not a phone no or the number is bigger than length current submitted length is ' . $phone_no_length;
                }
            } else {

                // that means this is an email address and this is not a phone number

                // echo $this->alert("danger", "this is an email ");

            }

            // the user submit checking ends here


            // checking if the cpassword is euals to password

            if ($cpassword == $password) {
                // make hash to password
                $hash = password_hash($password, PASSWORD_DEFAULT);



                $is_user_exist_check = $this->get_data_where("users", " `user_email` = '$email_or_phone_no' OR `user_phone_no` = '$email_or_phone_no'");
                if ($is_user_exist_check) {
                    if ($is_user_exist_check->num_rows > 0) {
                        echo $this->alert("danger", "The submited email or phone no is already exists !! Please use another !!");
                    } else {
                        // that means the user submitted email or phone no is not exist on the system

                        // so we have to proceed with our next step to insert data

                        if ($user_submitted_status_email_or_phone_no == 'email') {

                            $result = $this->insert("users", "`user_name`, `user_email`, `user_submitted_status_emai/phone`, `password`, `user_role`, `user_department`, `other_role`", "'$user_name', '$email_or_phone_no', '$user_submitted_status_email_or_phone_no', '$hash', '$your_role', '$department', '$other_role'");

                            if ($result) {
                                echo  $this->alert("success", "Your UBook account has been created successfully !! Welcome to the family of UBook !!");
                            } else {
                                echo  $this->alert("success", "Sorry, your UBook account cannot be created successfylly !! Please try again later !! We are working with the issue !!");
                            }
                        }

                        if ($user_submitted_status_email_or_phone_no == 'phone_no') {
                            $result = $this->insert("users", "`user_name`, `user_phone_no`, `user_submitted_status_emai/phone`, `password`, `user_role`, `user_department`, `other_role`", "'$user_name', '$email_or_phone_no', '$user_submitted_status_email_or_phone_no', '$hash', '$your_role', '$department', '$other_role'");

                            if ($result) {
                                echo  $this->alert("success", "Your UBook account has been created successfully !! Welcome to the family of UBook !!");
                            } else {
                                echo  $this->alert("success", "Sorry, your UBook account cannot be created successfylly !! Please try again later !! We are working with the issue !!");
                            }
                        }
                    }
                }
            }
        }
    }
}
