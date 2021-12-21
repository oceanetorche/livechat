function verifyPassword() {
    {
        var password  = document.getElementById("password");
        var confirmpassword  = document.getElementById("confirmpassword");

        if(password.value !== confirmpassword.value){
            confirmpassword.setCustomValidity("Passwords don't match");
        } else {
            confirmpassword.setCustomValidity("");
        }
    }
}

/*

function validateSignupForm() {

    if (!checkFirstname() || !checkLastname() || !checkUsername() || !checkEmail() || checkPassword()) {
        return false;
    } else {
        return (true);
    }
}

function checkFirstname() {

    const firstname = document.getElementById('firstname');
    var firstnameRegex = /^[a-zA-Z\u00C0-\u00FF]*$/;
    var firstnameResult = firstnameRegex.test(firstname.value);

    if (firstname.value === "") {
        firstname.setCustomValidity("Please enter firstname");
        return false;
    }

    if (firstnameResult === false) {
        firstname.setCustomValidity("Letters only");
        return false;
    }
    firstname.setCustomValidity("");
    return true;
}

function checkLastname() {

    const lastname = document.getElementById('firstname');
    var lastnameRegex = /^[a-zA-Z\u00C0-\u00FF]*$/;
    var lastnameResult = lastnameRegex.test(lastname.value);

    if (lastname.value === "") {
        lastname.setCustomValidity("Please enter lastname");
        return false;
    }

    if (lastnameResult === false) {
        lastname.setCustomValidity("Letters only");
        return false;
    }
    lastname.setCustomValidity("");
    return true;
}

function checkUsername() {

    const username = document.getElementById('pseudo');

    if (username.value === "") {
        username.setCustomValidity("Please enter username");
        return false;
    }
    username.setCustomValidity("");
    return true
}

function checkEmail() {
    const email = document.getElementById('email');
    var emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var emailResult = emailRegex.test(email.value)

    if (email.value === "") {
        email.setCustomValidity("Please enter email");
        return false;
    }
    if (emailResult === false) {
        email.setCustomValidity("Example bob@gmail.com");
        return false;
    }
    email.setCustomValidity("");
    return true
}

function checkPassword() {

    const password  = document.getElementById("password");
    const confirmpassword  = document.getElementById("confirmpassword");

    if (password.value === "") {
        password.setCustomValidity("Please enter password");
        return false;
    }
    if (confirmpassword.value === "") {
        confirmpassword.setCustomValidity("Please enter confirm password");
        return false;
    }
    if(password.value !== confirmpassword.value){
        confirmpassword.setCustomValidity("Passwords don't match");
    }
    email.setCustomValidity("");
    return true

}

 */