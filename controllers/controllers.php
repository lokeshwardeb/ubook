<?php

require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../models/models.php';


class controllers extends models{

    public function alert($alert_type, $alert_data){
        if($alert_type == 'success'){
            return ('<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success !!</strong> '.$alert_data.'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>');    
        }
        if($alert_type == 'danger'){
            return ('<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error !!</strong> '.$alert_data.'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>');    
        }
        
    }

    public function alert_session($alert_type){
        if($alert_type == 'success'){
            if (isset($_SESSION['alert_message'])) {
                //  $alert_data = $_SESSION['alert_message'];
                
                // Display the alert using JavaScript
                echo ('<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success !!</strong> '.$_SESSION['alert_message'].'
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>');
                
                // Clear the session variable to prevent the message from showing again
                unset($_SESSION['alert_message']);
            }
               
        }
        if($alert_type == 'danger'){
            if (isset($_SESSION['alert_message'])) {
                // $_SESSION['alert_message'] = $alert_data;
                
                // Display the alert using JavaScript
                return ('<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Success !!</strong> '.$_SESSION['alert_message'].'
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>');
                
                // Clear the session variable to prevent the message from showing again
                unset($_SESSION['alert_message']);
            }
        }
        
    }



    public function login(){

    


    }

    public function signup(){

        if(isset($_POST['signup_ubook'])){

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
            

            if($check_valid_email){
                // that means this is a email

                // that means the user has submited email address

                $user_submitted_status_email_or_phone_no = 'email';


                // echo $this->alert("success", "submited email address");
                // exit;
                
            }

            $check_valid_phone = preg_replace('/[^0-9]/', '', $email_or_phone_no);

            $phone_no_length = strlen($email_or_phone_no);

            
            if($check_valid_email == false){

                if($check_valid_phone && strlen($email_or_phone_no) <=11){
                    // that means this is a phone no
    
                    // that means the user has submited phone no
                    echo $check_valid_phone;

                    $user_submitted_status_email_or_phone_no = 'phone_no';
    
                //   $_SESSION['alert_message'] = 'phone';
                // echo  $this->alert("success", "This is a phone message");
    
    
                }else{
                    echo 'this is not a phone no or the number is bigger than length current submitted length is ' . $phone_no_length;
                }
    
    

            }else{

                // that means this is an email address and this is not a phone number

                // echo $this->alert("danger", "this is an email ");

            }

            // the user submit checking ends here


            // checking if the cpassword is euals to password

            if($cpassword == $password){
                // make hash to password
                $hash = password_hash($password, PASSWORD_DEFAULT);



                $is_user_exist_check = $this->get_data_where("users", " `user_email` = '$email_or_phone_no' OR `user_phone_no` = '$email_or_phone_no'");
                if($is_user_exist_check){
                    if($is_user_exist_check->num_rows > 0){
                        echo $this->alert("danger", "The submited email or phone no is already exists !! Please use another !!");
                    }else{
                        // that means the user submitted email or phone no is not exist on the system

                        // so we have to proceed with our next step to insert data

                        if($user_submitted_status_email_or_phone_no == 'email'){

                            $result = $this->insert("users", "`user_name`, `user_email`, `user_submitted_status_emai/phone`, `password`, `user_role`, `user_department`, `other_role`", "'$user_name', '$email_or_phone_no', '$user_submitted_status_email_or_phone_no', '$hash', '$your_role', '$department', '$other_role'");

                            if($result){
                              echo  $this->alert("success", "Your UBook account has been created successfully !! Welcome to the family of UBook !!");
                            }else{
                              echo  $this->alert("success", "Sorry, your UBook account cannot be created successfylly !! Please try again later !! We are working with the issue !!");
                            }

                        }

                        if($user_submitted_status_email_or_phone_no == 'phone_no'){
                            $result = $this->insert("users", "`user_name`, `user_phone_no`, `user_submitted_status_emai/phone`, `password`, `user_role`, `user_department`, `other_role`", "'$user_name', '$email_or_phone_no', '$user_submitted_status_email_or_phone_no', '$hash', '$your_role', '$department', '$other_role'");

                            if($result){
                              echo  $this->alert("success", "Your UBook account has been created successfully !! Welcome to the family of UBook !!");
                            }else{
                              echo  $this->alert("success", "Sorry, your UBook account cannot be created successfylly !! Please try again later !! We are working with the issue !!");
                            }
                        }

                        
            



                    }
                }

            }
            





        }






    }








    
}






?>