/**
 * @file      verifyPassword.js
 * @brief     This file is designed to verify the entered password
 * @author    Created by Henry Burgat & Océane Torche
 * @version   23.11.2021
 */


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