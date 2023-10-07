<?php

require_once __DIR__ . '/inc/_header.php';

?>


<!-- main code starts from here -->
<main>
    <div class=" dashboard_section">
        <?php

require_once __DIR__ . '/inc/_navbar.php';


?>

        <!-- main content section starts here -->
        <div class="main_content_section">
            <div class="row">
                <div class="col-md-3">
                    <!-- sidebar_section starts here -->
                    <div class="sidebar_section mb-4">
                        <div class="container" id="side_section">
                            <div class="mb-3 mt-4 p-4 profile_link_section">
                                <a href="" class="nav-link profile_link"> <img src="" class="img-fluid rounded-circle bg-secondary profile_img" alt=" "> Lokeshwar Deb</a>
                            </div>

                            <div class="menu_content text-center">
                                <div class="mb-3 mt-4 menu_hover ps-4 pe-4">
                                    <a href="" class="nav-link  d-flex">
                                        <div class="content hover_menu d-flex">
                                            <img src="/assets/img/news.png" id="menu_news" class="img-fluid hover_menu" alt=" ">
                                            <div class="menu_news menu_hover m-auto p-5 pt-2 ">News</div>
                                        </div>

                                    </a>
                                </div>
                            </div>
                            <div class="menu_content text-center">
                                <div class="mb-3 mt-4 menu_hover ps-4 pe-4">
                                    <a href="" class="nav-link  d-flex">
                                        <div class="content hover_menu d-flex">
                                            <img src="/assets/img/promotion.png" id="menu_news" class="img-fluid hover_menu" alt=" ">
                                            <div class="menu_news menu_hover m-auto p-5 pt-2">Announcement</div>
                                        </div>

                                    </a>
                                </div>
                            </div>
                            <div class="menu_content text-center">
                                <div class="mb-3 mt-4 menu_hover ps-4 pe-4">
                                    <a href="" class="nav-link  d-flex">
                                        <div class="content hover_menu d-flex">
                                            <img src="/assets/img/worker (1).png" id="menu_news" class="img-fluid hover_menu" alt=" ">
                                            <div class="menu_news menu_hover m-auto p-5 pt-2">Study</div>
                                        </div>

                                    </a>
                                </div>
                            </div>
                            <div class="menu_content text-center">
                                <div class="mb-3 mt-4 menu_hover ps-4 pe-4">
                                    <a href="" class="nav-link  d-flex">
                                        <div class="content hover_menu d-flex">
                                            <img src="/assets/img/assignment.png" id="menu_news" class="img-fluid hover_menu" alt=" ">
                                            <div class="menu_news menu_hover m-auto p-5 pt-2">Assignments</div>
                                        </div>

                                    </a>
                                </div>
                            </div>
                            <div class="menu_content text-center">
                                <div class="mb-3 mt-4 menu_hover ps-4 pe-4">
                                    <a href="" class="nav-link  d-flex">
                                        <div class="content hover_menu d-flex">
                                            <img src="/assets/img/worker.png" id="menu_news" class="img-fluid hover_menu" alt=" ">
                                            <div class="menu_news menu_hover m-auto p-5 pt-2">Class Shedule</div>
                                        </div>

                                    </a>
                                </div>
                            </div>
                            <div class="menu_content text-center">
                                <div class="mb-3 mt-4 menu_hover ps-4 pe-4">
                                    <a href="" class="nav-link  d-flex">
                                        <div class="content hover_menu d-flex">
                                            <img src="/assets/img/audience.png" id="menu_news" class="img-fluid hover_menu" alt=" ">
                                            <div class="menu_news menu_hover m-auto p-5 pt-2">Department</div>
                                        </div>

                                    </a>
                                </div>
                            </div>
                            <div class="menu_content text-center">
                                <div class="mb-3 mt-4 menu_hover ps-4 pe-4">
                                    <a href="" class="nav-link  d-flex">
                                        <div class="content hover_menu d-flex">
                                            <img src="/assets/img/university2.png" id="menu_news" class="img-fluid hover_menu" alt=" ">
                                            <div class="menu_news menu_hover m-auto p-5 pt-2">Exams</div>
                                        </div>

                                    </a>
                                </div>
                            </div>
                            <div class="menu_content text-center">
                                <div class="mb-3 mt-4 menu_hover ps-4 pe-4">
                                    <a href="" class="nav-link  d-flex">
                                        <div class="content hover_menu d-flex">
                                            <img src="/assets/img/cogwheel.png" id="menu_news" class="img-fluid hover_menu" alt=" ">
                                            <div class="menu_news menu_hover m-auto p-5 pt-2">Settings</div>
                                        </div>

                                    </a>
                                </div>
                            </div>
                            <div class="menu_content text-center">
                                <div class="mb-5 pb-5 mt-4 menu_hover ps-4 pe-4">
                                    <a href="" class="nav-link  d-flex">
                                        <div class="content hover_menu d-flex mb-5 pb-4">
                                            <img src="/assets/img/logout.png" id="menu_news" class="img-fluid hover_menu" alt=" ">
                                            <div class="menu_news menu_hover m-auto p-5 pt-2">Logout</div>
                                        </div>

                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- sidebar_section ends here -->
                </div>
                <div class="col-md-6">
                    <!-- middle post section starts here -->
                    <div class="middle_post_section container-fluid bg-light-secondary pt-4 pb-4">


                    <!-- modal function starts here -->

                    <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Create a post</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
            <div class="mb-3">
                <!-- <input type="text" class="form-control" > -->
                <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="Write a post on this community ..... "></textarea>
                <label for="image">Add you Image here (Single image is permitted per post)</label>
                <input type="file" name="" id="" class="form-control mt-4 mb-4">
            </div>
            <!-- <div class="mb-3">
                <button type="submit" class="btn btn-primary">Post</button>
            </div> -->
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Post</button>
      </div>
    </div>
  </div>
</div>


                    <!-- modal function ends here -->


                        <div class="create_post_section d-flex bg-light m-auto">
                        <button type="button" class="btn text-center m-auto btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <div href="" class="nav-link d-flex m-auto">
                                <img src="" alt=" " class="img-fluid profile_img rounded-circle bg-light">
                                <div class="input">

                                Write what's on your mind, Lokeshwar?

                                <!-- <input type="text" class="form-control post_input" placeholder="Write what's on your mind, Lokeshwar?" disabled> -->


                                </div>
                                <!-- <input type="text" class="form-control"> -->
                            </div>
                        </div>
                        </button>

                           


                        <div class="container post_section mt-4 mb-4 pt-4 page">

                            <div class="post_info"> <a href="" class="nav-link d-flex m-auto">
                                    <img src="" alt=" " class="img-fluid profile_img me-2 rounded-circle bg-light">
                                    <div class="posted_by">Lokeshwar Deb</div>
                                    <!-- <input type="text" class="form-control"> -->
                                </a>
                                <div class="poster_time text-secondary">8hr ago</div>
                            </div>

                            <hr>

                            <div class="post_contents">
                                <div class="post_text">
                                    Hello World ! this is the first post on this websute,

                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione quam dolores, reiciendis iste alias nisi rerum exercitationem autem recusandae ex itaque. Id atque iure nostrum expedita. Corporis rerum sequi ipsam!

                                </div>

                                <div class="post_media_section container text-center pt-4 pb-4">
                                    <img src="/assets/img/assignment.png" alt="">
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
                        <div class="container post_section mt-4 mb-4 pt-4 pb-4 page">

                        </div>

                    </div>
                    <!-- middle post section ends here -->

                </div>
                <div class="col-md-3">
                    <!-- info sidebar section starts here -->
                    <div class="info_sidebar_section">

                        <div class="container" id="info_side_section">


                            <div class="menu_content text-center">
                                <div class="mb-3 mt-4 menu_hover ps-4 pe-4">
                                    <a href="" class="nav-link  d-flex">
                                        <div class="content hover_menu d-flex">
                                            <img src="/assets/img/graduated2.png" id="menu_news" class="img-fluid hover_menu" alt=" ">
                                            <div class="menu_news menu_hover m-auto p-5 pt-2">Connects</div>
                                        </div>

                                    </a>
                                </div>
                            </div>
                            <div class="menu_content text-center">
                                <div class="mb-3 mt-4 menu_hover ps-4 pe-4">
                                    <a href="" class="nav-link  d-flex">
                                        <div class="content hover_menu d-flex">
                                            <img src="/assets/img/promotion.png" id="menu_news" class="img-fluid hover_menu" alt=" ">
                                            <div class="menu_news menu_hover m-auto p-5 pt-2">Community Guidelines</div>
                                        </div>

                                    </a>
                                </div>
                            </div>

                            <div class="menu_content text-center">
                                <div class="mb-3 mt-4 menu_hover ps-4 pe-4">
                                    <a href="" class="nav-link  d-flex">
                                        <div class="content hover_menu d-flex">
                                            <img src="/assets/img/worker (1).png" id="menu_news" class="img-fluid hover_menu" alt=" ">
                                            <div class="menu_news menu_hover m-auto p-5 pt-2">Help &Supports</div>
                                        </div>

                                    </a>
                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- info sidebar section ends here -->

                </div>
            </div>
        </div>
        <!-- main content section ends here -->

    </div>
</main>
<!-- main code ends from here -->

<?php

require_once __DIR__ . '/inc/_footer.php';

?>

<?php

require_once __DIR__ . '/inc/_footer_script.php';

?>