<?php

require_once __DIR__ . '/inc/_header.php';

require_once __DIR__ . '/../../config/config.php';
require_once __DIR__ . '/../../models/models.php';
require_once __DIR__ . '/../../controllers/controllers.php';

$model = new models;

$controllers = new controllers;


?>

<!-- main code starts from here -->
<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-12 text-center">
                <img src="/assets/img/university.png" class="login_signup_university_img" alt="">
            </div>
            <div class="col-md-6 col-sm-12 mt-5">
                <div class="container text-center mt-5 fs-4">
                    Welcome to UBook
                </div>
                <div class="container form_section mt-4">
                    <form action="" method="post">

                        <div class="mb-3 mt-3">
                            <?php


// echo $controllers->alert()

                      echo  $controllers->signup();



?>
                        </div>




                        <div class="mb-3 mt-3">
                            <input type="text" name="user_name" id="" class="form-control cus_placeholder" placeholder="Your Full name" required>
                        </div>
                        <div class="mb-3 mt-3">
                            <input type="text" name="email_or_phone_no" id="" class="form-control cus_placeholder" placeholder="Email address or Phone no" required>
                        </div>
                      

                        <div class="mb-3 mt-4">
                            <input type="text" name="password" id="" class="form-control cus_placeholder" placeholder="Password" required>
                        </div>

                        <div class="mb-3 mt-4">
                            <input type="text" name="cpassword" id="" class="form-control cus_placeholder" placeholder="Confirm Password" required>
                        </div>
                        <!-- <input type="text" name="password" id=""  placeholder="Password"> -->

                        <div class="mb-3 mt-4">
                            <select name="your_role" id="your_role" class="form-control cus_placeholder" onchange="check_your_role()" required>
                                <option value="" class="text-center">Your are a ....</option>
                                <option value="Student" class="text-center">Student</option>
                                <option value="Lecturer or Teacher" class="text-center">Lecturer or Teacher</option>
                                <option value="University Officials" id="univer_offi" class="text-center">University Officials</option>
                            </select>
                        </div>

                        <div class="mb-3 mt-4">
                            <input type="text" name="other_role" id="other_role" class="form-control cus_placeholder d-none" placeholder="What is your role?" oninvalid="this.setCustomValidity('Please enter your role. ')" >


                        </div>

                        <div class="mb-3 mt-4">
                            <select name="department" id="department" class="form-control cus_placeholder" required>
                                <option value="" class="text-center" selected>Select Your Department</option>
                                <option value="Computer Science and Engineering ( CSE )" class="text-center">Computer Science and Engineering ( CSE )</option>
                                <option value="Electrical and Electronics Engineering ( EEE )" class="text-center">Electrical and Electronics Engineering ( EEE )</option>
                                <option value="Bussiness of Bachelor Administration ( BBA )" class="text-center">Bussiness of Bachelor Administration ( BBA )</option>
                                <option value="English" class="text-center">English</option>
                                <option value="Sociology" class="text-center">Sociology</option>


                            </select>

                        </div>


                        <div class="mb-3 text-center mt-5">
                            <button type="submit" name="signup_ubook" class="btn btn-success text-center cus_signup_btn">Create new account</button>
                            
                        </div>

                        <div class="mb-5 mt-5 text-center">
                            <a href="/" class="nav-link text-primary">Already have a account? Login</a>
                        </div>




                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- main code starts from here -->

<?php

require_once __DIR__ . '/inc/_footer.php';

?>

<?php

require_once __DIR__ . '/inc/_footer_script.php';

?>