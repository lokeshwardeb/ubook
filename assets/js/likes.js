function like_button() {
    let like_button = document.querySelectorAll('.like_button');
    let like_status = document.querySelectorAll('.like_status');
    let like_icon = document.querySelectorAll('.like');
    let brand_like = document.querySelectorAll('.brand_like');

    console.log(like_icon)

    like_button.forEach((Element) => {

        console.log('clicked')
        var lksv = like_status.value;
        console.log(lksv);

        if (lksv == undefined || lksv == '') {
            var p_lks = like_status.value = 'liked'
            console.log('lksv is blank');

            console.log(p_lks);

        } else {
            console.log('status changed')

            var p_lks = like_status.value = 'unliked'


            console.log(p_lks);
            console.log('lk is not blank')
        }

        if (p_lks == 'liked') {
            // this means the present like status is set to liked
            // like_icon[Element].classlist.add('d-none');

            for (i = 0; i < like_icon.length; i++) {
                if (like_icon.length > 1) {
                    like_icon[i].classList.add('d-none');
                    brand_like[i].classList.remove('d-none');
                    console.log('no disp applied');
                    break;
                }
            }

            console.log('like_ion changed')


        } else {

            for (i = 0; i < brand_like.length; i++) {
                if (brand_like.length > 1) {

                }
            }

        }




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