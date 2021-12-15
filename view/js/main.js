
function verifyPassword(){
    const password  = document.getElementById("password").value;
    const confirmPassword  = document.getElementById("confirmpassword").value;

    let passwordMinLength = false;
    let passwordMaxLength = false;
    let passwordSame      = false;

    while (passwordMinLength === false && passwordMaxLength === false && passwordSame === false) {
        document.getElementById("signUpButton").disabled = true;

        //minimum password length validation
        if (password.length < 8) {
            document.getElementById("message").innerHTML = "Password length must be atleast 8 characters";
            return passwordMinLength === true;
        } else{
            document.getElementById("message").innerHTML = "";
        }

        //maximum length of password validation
        if (password.length > 15) {
            document.getElementById("message").innerHTML = "Password length must not exceed 15 characters";
            return passwordMinLength === true;
        } else{
            document.getElementById("message").innerHTML = "";
        }

        //verifyConfirmPassword
        if(password !== confirmPassword){
            document.getElementById("message").innerHTML = "Password doesn't match";
             passwordMinLength === true;
        } else{
            document.getElementById("message").innerHTML = "";
        }
    }
    if (passwordMinLength === true && passwordMaxLength === true && passwordSame === true) {
        document.getElementById("signUpButton").disabled = false;
    }
}

function allLetter()
{
    var letters = /^[A-Za-z]+$/;
    var firsName = document.getElementById('firstname');
    var lastName = document.getElementById('lastname');

    if((firsName.value.match(letters)) && (lastName.value.match(letters)))
    {
        document.getElementById("message").innerHTML = "Firstname and lastname letters only";
    }
    else
    {
        document.getElementById("message").innerHTML = "";
    }
}