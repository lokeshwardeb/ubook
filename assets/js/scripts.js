
function check_your_role(){
    var other_role = document.getElementById('other_role');
var univer_offi = document.getElementById('univer_offi');

var department = document.getElementById('department');

var your_role = document.getElementById('your_role');

if(your_role.value == 'University Officials'){
    console.log('your role selected');
    other_role.classList.remove('d-none');
    other_role.setAttribute('required', 'true');

}else{
    other_role.classList.add('d-none');
}

}

function comments(){
    // var comment_section = document.getElementById('comment_section');
    var comment_section = document.getElementsByClassName('comment_section');
    var write_comment = document.getElementsByClassName('write_comment');

    write_comment.classList.toggle('d-none');

}

function like(){
    // var like_icon = document.getElementById('like_icon');
   
    var like_input = document.getElementsByClassName('like_input');

    // var likes = document.getElementById('not_liked');

    var brand_like = document.getElementsByClassName('brand_like');
    var likes = document.getElementsByClassName('like');


        // var brand_like = document.getElementById('brand_like');
    // var likes = document.getElementById('like');
    


    // Get the icon element
// const icon = document.getElementById('icon');

// Function to change the color
// function changeIconColor(newColor) {
//   icon.style.color = newColor;
// }

// // Example: Change the color to red
// changeIconColor('red');

  // JavaScript code to handle multiple like buttons
  const likeButtons = document.querySelectorAll(".like_button");
//   const likeButtons = document.querySelectorAll(".like-button");

  likeButtons.forEach((button) => {
      let likeCount = 0;
      const likeCountDisplay = button.nextElementSibling; // Get the sibling <p> element

      button.addEventListener("click", function () {
          likeCount++;

          console.log('button clicked');

        //   likeCountDisplay.textContent = likeCount + (likeCount === 1 ? " Like" : " Likes");
        //   button.classList.add("liked");
        //   button.disabled = true;
      });
  });


// for (let i = 0; i < likes.length; i++) {
//     const likes_btn = likes[i];

    
//     if(like_input[i].value == 'liked'){
//         // this means the button is liked and clicked to unlike
//         // likes.classList.removue('d-none');
//         // brand_like.classList.add('d-none');
//         // likes.classList.add('fa-regular');
//         // like_input.value = 'unliked';
//         likes[i].classList.remove('d-none');
//         brand_like[i].classList.add('d-none');
//         likes[i].classList.add('fa-regular');
//         like_input[i].value = 'unliked';
 

//     }else{
//         // this means the button is unliked and clicked to like

        
//         brand_like[i].classList.remove('d-none');
//         likes[i].classList.add('d-none');
//         likes[i].classList.add('fa-regular');

//         like_input[i].value = 'liked';





//         // brand_like.classList.remove('d-none');
//         // likes.classList.add('d-none');
//         // like_input.value = 'liked';


     

//         // like_input.value = 'liked';


//     }
    
// }






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

// function liked(){
//     var like_btn = document.getElementsByName()
// }