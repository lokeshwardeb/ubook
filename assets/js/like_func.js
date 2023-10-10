function like_button() {
  // function like_func() {
  var increButton = document.getElementsByClassName('inc');
  // var decrementButton = document.getElementsByClassName('dec');
  for (let i = 0; i < increButton.length; i++) {
    var button = increButton[i];

    button.addEventListener('click', function (event) {

      var buttonClicked = event.target;
      var input = buttonClicked.parentElement.children[2];
      var like_icon = buttonClicked.parentElement.children[0]
      var brandlike_icon = buttonClicked.parentElement.children[1]
      console.log('------------------------ ');
      console.log('/the input button starts: ' + input);
      var inputValue = input.value;

      console.log('Like value is :' + input)
      console.log('Like value is :' + inputValue)



      // if(inputValue == '' | inputValue == 'disliked'){

      //   input.value = 'liked';

      //   like_icon.classList.add('d-none');
      //   brandlike_icon.classList.remove('d-none');
      //   // brandlike_icon.classList.add('fa-heart');

      // }else{
      //   input.value = 'disliked';
      //   input.value = 'liked';
      //   like_icon.classList.remove('d-none');
      //   brandlike_icon.classList.add('d-none');
      // }

      //    if(inputValue == 'disliked'){
      //     input.value = 'liked';
      //     like_icon.classList.remove('d-none');
      //     brandlike_icon.classList.add('d-none');

      //   }
      //   else if(inputValue = 'liked'){
      //     input.value = 'disliked';
      //   }


    })

  }
  // }
}