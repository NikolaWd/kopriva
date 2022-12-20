var incrementButton = document.getElementsByClassName('inc');
    var decrementButton = document.getElementsByClassName('dec');

    for(var i=0; i<incrementButton.length; i++){
        var button = incrementButton[i];
        button.addEventListener('click', function(event){

            var buttonClicked = event.target;
            //console.log(buttonClicked);
            var input = buttonClicked.parentElement.children[1];
            //console.log(input);
            var inputValue = input.value;
            //console.log(inputValue);
            var newValue = parseInt(inputValue)+1;
            //console.log(newValue);
            if(newValue <= 10)
                input.value = newValue;
            else
                return false;

        })
    }

    for(var i=0; i<decrementButton.length; i++){
        var button = decrementButton[i];
        button.addEventListener('click', function(event){

            var buttonClicked = event.target;
            //console.log(buttonClicked);
            var input = buttonClicked.parentElement.children[1];
            //console.log(input);
            var inputValue = input.value;
            //console.log(inputValue);
            var newValue = parseInt(inputValue)-1;
            //console.log(newValue);
            if(newValue >=1)
                input.value = newValue;
            else
                return false;

        })
    }
