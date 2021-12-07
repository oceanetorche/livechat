
function verifyPassword() {
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirmpassword").value;

    //minimum password length validation
    if (password.length < 8) {
        document.getElementById("message").innerHTML = "**Password length must be atleast 8 characters";
        return false;
    }

    //maximum length of password validation
    if (password.length > 15) {
        document.getElementById("message").innerHTML = "**Password length must not exceed 15 characters";
        return false;
    } else {
        alert("Password is correct");
    }

    //confirm password
    if (password != confirmPassword) {
        document.getElementById("message").innerHTML = "**Password doesn't match";
        return false;
    }
}