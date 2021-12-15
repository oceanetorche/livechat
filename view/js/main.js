
function verifyPassword(){
    var password  = document.getElementById("password").value;
    var confirmPassword  = document.getElementById("confirmpassword").value;

    //verifyConfirmPassword
    if(password !== confirmPassword){
        document.getElementById("message").innerHTML = "Password doesn't match";
        passwordMinLength === true;
    } else{
        document.getElementById("message").innerHTML = "";
    }
}