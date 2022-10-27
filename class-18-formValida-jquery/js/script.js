
function checkFirstName()
{
    var firstNameValue = $('#firstName').val();
    var regExp = /^[a-z A-Z-\.]{2,25}$/;  
    // ultra pico website for bulit regex.
    if(regExp.test(firstNameValue)){
        $('#firstNameError').text(' ');
        return true;
    }
    else{
        $('#firstNameError').text('First Name Should be 2 to 25 Characters');
        return false;
    }
}

function checkLastName(){
  var lastNameValue = $('#lastName').val();
  var regExp = /^[a-zA-Z-\.]{3,23}$/;
  if(regExp.test(lastNameValue))
  {
    $('#lastNameError').text(' ');
    return true;
  }
  else{
    $('#lastNameError').text('Last Name Should be 3 to 23 Characters');
    return false;
  }
}

function checkEmail(){
    var emailValue = $('#email').val();
    // var regExp = /^([a-zA-Z\.]) $/; have more.
  if(emailValue.length >=4 && emailValue.length <=26)
  {
    $('#emailError').text(' ');
    return true;
  }
  else{
    $('#emailError').text('Email Should be 4 to 26 Characters');
    return false;
  }
}

function checkPassword(){
    var passwordValue = $('#password').val();
  if(passwordValue.length >=6 && passwordValue.length <=20)
  {
    $('#passwordError').text(' ');
    return true;
  }
  else{
    $('#passwordError').text('Email Should be 6 to 20 Characters');
    return false;
  }
}

function checkConfirmPassword(){
    var passwordValue = $('#password').val();
    var confirmPassword = $('#confirmPassword').val();
  if(passwordValue == confirmPassword)
  {
    $('#ConfirmPasswordError').text(' ');
    return true;
  }
  else{
    $('#ConfirmPasswordError').text('Password Should be same');
    return false;
  }
}


$('#firstName').keyup(function(){
    checkFirstName()
});

$('#lastName').keyup(function(){
    checkLastName();
});

$('#email').keyup(function(){
    checkEmail();
 });

 $('#password').keyup(function(){
    checkPassword();
 });

 $('#confirmPassword').keyup(function(){
    checkConfirmPassword();
 });



$('#registerForm').submit(function(){
    if (checkFirstName() == true && checkLastName() == true && checkEmail() ==true){
        return true;
    }
    else{
        return false;
    }
});