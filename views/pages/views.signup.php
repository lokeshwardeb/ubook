<?php

require_once __DIR__ . '/inc/_header.php';

?>

<!-- main code starts from here -->
<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-12 text-center">
                <img src="/assets//img/university.png" alt="">
            </div>
            <div class="col-md-6 col-sm-12 mt-5">
                <div class="container text-center mt-5 fs-4">
                    Welcome to UBook
                </div>
                <div class="container form_section mt-4">
                    <form action="" method="post">
                        <div class="mb-3 mt-3">
                            <input type="text" name="email_or_phone_no" id="" class="form-control cus_placeholder" placeholder="Your Full name">
                        </div>
                        <div class="mb-3 mt-4">
                            <input type="text" name="password" id="" class="form-control cus_placeholder" placeholder="Email address or Phone no">
                        </div>

                        <div class="mb-3 mt-4">
                            <input type="text" name="password" id="" class="form-control cus_placeholder" placeholder="Password">
                        </div>

                        <div class="mb-3 mt-4">
                            <input type="text" name="password" id="" class="form-control cus_placeholder" placeholder="Confirm Password">
                        </div>
                        <!-- <input type="text" name="password" id=""  placeholder="Password"> -->

                        <div class="mb-3 mt-4">
                            <select name="" id="your_role" class="form-control cus_placeholder" onchange="check_your_role()">
                                <option value="" class="text-center">Your are a ....</option>
                                <option value="" class="text-center">Student</option>
                                <option value="" class="text-center">Lecturer or Teacher</option>
                                <option value="univer_offi" id="univer_offi" class="text-center">University Officials</option>
                            </select>
                        </div>

                        <div class="mb-3 mt-4">
                            <input type="text" name="password" id="other_role" class="form-control cus_placeholder d-none" placeholder="What is your role?">


                        </div>

                        <div class="mb-3 mt-4">
                            <select name="" id="department" class="form-control cus_placeholder">
                                <option value="" class="text-center" selected>Select Your Department</option>
                                <option value="" class="text-center">Computer Science and Engineering ( CSE )</option>
                                <option value="" class="text-center">Electrical and Electronics Engineering ( EEE )</option>
                                <option value="" class="text-center">Bussiness of Bachelor Administration ( BBA )</option>
                                <option value="" class="text-center">English</option>
                                <option value="" class="text-center">Sociology</option>


                            </select>

                        </div>


                        <div class="mb-3 text-center mt-5">
                            <a href="/dfd"> <button type="button" class="btn btn-success text-center cus_signup_btn">Create new account</button>
                            </a>
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