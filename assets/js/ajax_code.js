$("#profile_bio_update").click(function (e) { 
    e.preventDefault();

    let user_id = $("#user_id").val();
    let department_bio = $("#department_bio").val();
    let your_university_bio = $("#your_university_bio").val();
    let your_passion_bio = $("#your_passion_bio").val();
    let upload_profile_image = $("#upload_profile_image").val();
    let upload_banner_image = $("#upload_banner_image").val();


    // console.log(department_bio);

    $.ajax({
        type: "POST",
        url: "ajax?ajax_function=profile_bio_update",
        data: {user_id:user_id,department_bio:department_bio, your_university_bio:your_university_bio, your_passion_bio:your_passion_bio,upload_banner_image:upload_banner_image,upload_profile_image:upload_profile_image},
        // dataType: "dataType",
        success: function (response) {
            // console.log(response);
            alert(response);
        }
    });
});

// like button increasing count on click starts here


$("#like-button").click(function (e) { 
    e.preventDefault();
    
    let user_id = $("#user_id").val();

    $.ajax({
        type: "GET",
        url: "ajax?ajax_function=like_count_update",
        // data: "data",
        // dataType: "dataType",
        success: function (response) {
            
        }
    });


});



// like button increasing count on click starts here