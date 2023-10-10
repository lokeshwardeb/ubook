function lk_buttion() {
    let like_button = document.querySelectorAll('.like_button');
    let like_status = document.querySelectorAll('.like_status');
    let like_icon = document.querySelectorAll('.like');
    let brand_like = document.querySelectorAll('.brand_like');
    let like_input_class_value = document.querySelectorAll('.like_input_class_value');

    // console.log(like_icon);

    like_button.forEach((Element) => {


        var buttonClicked = event.target;
        var input = buttonClicked.parentElement.children[2];
        var black_like = buttonClicked.parentElement.children[0];
        var red_like = buttonClicked.parentElement.children[1];
        //   var brandlike_icon = buttonClicked.parentElement.children[1]


        if(input.value == ''){
            input.value = 'liked';
            black_like.classList.add('d-none');
            red_like.classList.remove('d-none');
        }
        else{
            input.value == 'kk';
            black_like.classList.remove('d-none');
            red_like.classList.add('d-none');
        }


        console.log('------------------------ ');

        // console.log(brand_icon);

        // input.value = 'liked';
        // console.log(input.value);
        // console.log('/the input button starts: ' + input);







        //   var inputValue = input.value;

        // //   input[0].value = "liked";

        // //   console.log('Like value is :' + input)
        //   console.log('Like value is :' + inputValue)

        //     console.log('clicked')
        //     var lksv = event.target.like_status.valueof;
        //     console.log(lksv);

        //     if(inputValue == ''){

        //     }






        // if (lksv == undefined || lksv == '') {
        //     var p_lks = like_status.value = 'liked'
        //     console.log('lksv is blank');

        //     console.log(p_lks);

        // } else {
        //     console.log('status changed')

        //     var p_lks = like_status.value = 'unliked'


        //     console.log(p_lks);
        //     console.log('lk is not blank')
        // }

        // if (p_lks == 'liked') {
        //     // this means the present like status is set to liked
        //     // like_icon[Element].classlist.add('d-none');

        //     for (i = 0; i < like_icon.length; i++) {
        //         if (like_icon.length > 1) {
        //             like_icon[i].classList.add('d-none');
        //             brand_like[i].classList.remove('d-none');
        //             console.log('no disp applied');
        //             break;
        //         }
        //     }

        //     console.log('like_ion changed')


        // } else {

        //     for (i = 0; i < brand_like.length; i++) {
        //         if (brand_like.length > 1) {

        //         }
        //     }

        // }




        // Element.addEventListener("click", function () {

        //     // like_status.forEach((li_st)=>{
        //     //    var like_status_value = li_st.value;
        //     //    if(like_status_value == ''){
        //     //     console.log("like Status is Blank");
        //     //    }
        //     // })
        // })
    })
}