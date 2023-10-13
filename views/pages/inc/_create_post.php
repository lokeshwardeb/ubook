<?php
require_once __DIR__ . '/../../../models/models.php';
require_once __DIR__ . '/../../../controllers/controllers.php';

$controllers = new controllers;



?>
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
                    <div class="mt-4 mb-4 d-block">
                        <?php

                        // $controllers->create_post();


                        ?>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <!-- <input type="text" class="form-control" > -->
                            <textarea name="post_text" id="" cols="30" rows="10" class="form-control" placeholder="Write a post on the UBook community ..... " ></textarea>
                            <label for="image">Add you Image here (Single image is permitted per post)</label>
                            <input type="file"  name="post_media" id="" class="form-control mt-4 mb-4">
                        </div>

                        <div class="mb-4">
                        <button type="submit" name="create_post" class="btn btn-primary">Post</button>

                        </div>
               
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <!-- <form action="" method="post" enctype="multipart/form-data">
                        <button type="submit" name="create_post" class="btn btn-primary">Post</button>

                        <button type="submit" name="create_post" class="btn btn-primary">Post</button>

                    </form> -->
                </div>
            </div>
        </div>
    </div>


    <!-- modal function ends here -->