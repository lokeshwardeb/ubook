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
                <div class="col-md-3 _sidebar_main_section">
                    <?php
                    //  initializing the sidebar section
                    require_once __DIR__ . '/inc/_sidebar.php';



                    ?>
                </div>
                <div class="col-md-6">
                    <!-- middle post section starts here -->

                  


<?php 

require_once __DIR__ . '/inc/_post_page.php';

?>

                    
                    <!-- <div class="container post_section mt-4 mb-4 pt-4 pb-4 page">

                    </div> -->

                <!-- </div> -->
                <!-- middle post section ends here -->

                <div class="col-md-3 _sidebar_main_section">
                <?php

                // initializing the info sidebar section
                require_once __DIR__ . '/inc/_info_sidebar.php';

                ?>
            </div>

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