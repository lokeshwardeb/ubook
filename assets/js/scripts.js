
function check_your_role(){
    var other_role = document.getElementById('other_role');
var univer_offi = document.getElementById('univer_offi');

var department = document.getElementById('department');

var your_role = document.getElementById('your_role');

if(your_role.value == 'univer_offi'){
    console.log('your role selected');
    other_role.classList.remove('d-none');

}else{
    other_role.classList.add('d-none');
}

}

function comments(){
    var comment_section = document.getElementById('comment_section');
    var write_comment = document.getElementById('write_comment');

    write_comment.classList.toggle('d-none');

}

function like(){
    // var like_icon = document.getElementById('like_icon');
   
    var like_input = document.getElementById('like_input');

    // var likes = document.getElementById('not_liked');

    var brand_like = document.getElementById('brand_like');
    var likes = document.getElementById('like');
    


    // Get the icon element
// const icon = document.getElementById('icon');

// Function to change the color
// function changeIconColor(newColor) {
//   icon.style.color = newColor;
// }

// // Example: Change the color to red
// changeIconColor('red');


    if(like_input.value == 'liked'){
        // this means the button is liked and clicked to unlike
        likes.classList.remove('d-none');
        brand_like.classList.add('d-none');
        likes.classList.add('fa-regular');
        like_input.value = 'unliked';
 

    }else{
        // this means the button is unliked and clicked to like

        brand_like.classList.remove('d-none');
        likes.classList.add('d-none');
        like_input.value = 'liked';


     

        like_input.value = 'liked';


    }


    // like_input.value = 'liked';


}


// if(your_role.value == 'univer_offi'){

//     console.log('your role selected');
//     other_role.classList.remove('d-none');

// }else{
//     console.log('your role not selected')
// }

// if(department.value = 'univer_offi'){
//     other_role.classList.remove('d-none');
// }