<?php

require_once __DIR__ . '/inc/_header.php';

?>

<!-- main code starts from here -->
<main>

    <div class="the_navbar">
        <?php

        require_once __DIR__ . '/inc/_navbar.php';


        ?>
    </div>

    <div class=" profiles_section ">
        <div class="top_banner_and_info_section">
            <div class="profile_banner">

                <div class="view_banner_link text-end pt-5 pe-4">
                    <a href="" class="text-center">View Banner image</a>
                </div>
            </div>

            <div class="profile_image text-center border border-1 border-secondary m-auto rounded-circle">
                <img src="/assets/img/assignment.png" alt=" " class="img-fluid rounded-circle text-center m-auto profile_img">
            </div>

            <div class="profile_user_info text-center fs-2">
                Lokeshwar Deb <br>
                <div class="fs-4">78 connects</div>
            </div>



        </div>

        <div class="container text-center">
            <div class="action_links text-center m-auto mb-4">
                <hr class="mt-4">
                <ul class="navbar text-center view_profile_ul ">
                    <li class=" nav-link text-dark"><a href="" class="nav-link ">Posts</a></li>
                    <li class=" nav-link text-dark"><a href="" class="nav-link ">About</a></li>
                    <li class=" nav-link text-dark"><a href="" class="nav-link ">Connects</a></li>
                    <li class=" nav-link text-dark"><a href="" class="nav-link ">Photos</a></li>
                </ul>
                <hr>
            </div>
        </div>

        <!-- info details sections starts here -->

        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="intro_bio_section m-4 border-bottom border-dark border-1">
                        <div class="section_title_into">
                            Intro
                        </div>
                        <div class="intro_action m-4">
                            <a href=""><button class="btn btn-secondary">Add Bio</button></a>
                        </div>

                        <div class="intro_bio_desc_section m-4">
                            <div class="mb-3">
                                Department:
                            </div>
                            <div class="mb-3">
                                University:
                            </div>
                            <div class="mb-3">
                                Passion:
                            </div>
                        </div>

                    </div>

                    <div class="photos_section mt-4 pt-4 mb-4">
                        <div class="photos_section_title m-4 pb-4">
                        Photos
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-4  border-1 border">
                                    <img src="/assets/img/assignment.png" alt=" " class="img-fluid ">
                                </div>
                                <div class="col-4  border-1 border">
                                    <img src="/assets/img/profile.png" alt=" " class="img-fluid ">

                                </div>
                                <div class="col-4  border-1 border ">
                                    <img src="/assets/img/Main page.png" alt=" " class="img-fluid ">

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="connects_section mt-4 pt-4 mb-4">
                        <div class="connects_section_title m-4 pb-4">
                            Connects
                        </div>
                        <div class="container mt-4 mb-4 ">
                            <div class="row">
                                <div class="col-4  border-1 border">
                                    <img src="/assets/img/assignment.png" alt=" " class="img-fluid ">
                                    <div class="connect_user_name">
                                        Birat
                                    </div>
                                </div>
                                <div class="col-4  border-1 border">
                                    <img src="/assets/img/profile.png" alt=" " class="img-fluid ">
                                    <div class="connect_user_name">
                                        Birat
                                    </div>

                                </div>
                                <div class="col-4  border-1 border">
                                    <img src="/assets/img/Main page.png" alt=" " class="img-fluid ">
                                    <div class="connect_user_name">
                                        Birat
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="container mt-4 mb-4 ">
                            <div class="row">
                                <div class="col-4  border-1 border">
                                    <img src="/assets/img/assignment.png" alt=" " class="img-fluid ">
                                    <div class="connect_user_name">
                                        Birat
                                    </div>
                                </div>
                                <div class="col-4  border-1 border">
                                    <img src="/assets/img/profile.png" alt=" " class="img-fluid ">
                                    <div class="connect_user_name">
                                        Birat
                                    </div>

                                </div>
                                <div class="col-4  border-1 border">
                                    <img src="/assets/img/Main page.png" alt=" " class="img-fluid ">
                                    <div class="connect_user_name">
                                        Birat
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>






                </div>
                <div class="col-6"></div>
            </div>
        </div>

        <!-- info details sections ends here -->



    </div>
</main>
<!-- main code starts from here -->

<?php

require_once __DIR__ . '/inc/_footer.php';

?>

<?php

require_once __DIR__ . '/inc/_footer_script.php';

?>