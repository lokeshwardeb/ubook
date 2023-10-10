<?php

require_once __DIR__ . '/inc/_header.php';

?>

<!-- main code starts from here -->
<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-12 text-center">
                <img src="/assets//img/university.png" class="login_signup_university_img" alt="">
            </div>
            <div class="col-md-6 col-sm-12 mt-5">
                <div class="container text-center mt-5 fs-4">
                    Welcome to UBook
                </div>
                <div class="container form_section mt-4">
                    <form action="" method="post">
                        <div class="mb-3 mt-3">
                            <input type="text" name="email_or_phone_no" id="" class="form-control cus_placeholder" placeholder="Email address or Phone no">
                        </div>
                        <div class="mb-3 mt-4">
                            <input type="text" name="password" id="" class="form-control cus_placeholder" placeholder="Password">
                        </div>
                        <div class="mb-3 mt-4 text-center">
                            <button type="submit" class="btn btn-primary text-center cus_login_signup_btn">Login</button>
                        </div>

                        <div class="mb-3 mt-5 text-center">
                            <a href="" class="nav-link text-primary">Are you forgotten your password?</a>
                        </div>

                        <div class="mb-3 mt-3">
                            <hr class="mt-5 border-1">
                        </div>

                        <div class="mb-3 text-center mt-5">
                    <a href="/signup">    <button type="button" class="btn btn-success text-center cus_signup_btn">Create new account</button>
</a>
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