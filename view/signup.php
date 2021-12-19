<?php

/**
 * @file      signup.php
 * @brief     File description
 * @author    Created by Henry Burgat & Océane Torche
 * @version   23.11.2021
 */

require "js/verifyPassword.js";
ob_start();
$title = "Sign up";


?>
    <html>
    <body>
    <div id="formWrapper">

        <form id="formSignUp" method="post" action="index.php?action=signup">

            <!-- Title -->
            <h1>
                WASSAP
            </h1>

            <!-- Subtitle -->
            <h3>
                Inscrivez-vous
            </h3>

            <!-- Firstname -->
            <div class="form-outline mb-4">
                <input type="text"
                       class="form-control"
                       id="firstname"
                       name="firstname"
                       placeholder="Firstname"
                       pattern="^[a-zA-Z\u00C0-\u00FF]*$"
                       oninvalid="this.setCustomValidity('Letters only')"
                       oninput="this.setCustomValidity('')"
                       required>
            </div>

            <!-- Lastname -->
            <div class="form-outline mb-4">
                <input type="text"
                       class="form-control"
                       id="lastname"
                       name="lastname"
                       placeholder="Lastname"
                       pattern="^[a-zA-Z\u00C0-\u00FF]*$"
                       oninvalid="this.setCustomValidity('Letters only')"
                       oninput="this.setCustomValidity('')"
                       required>
            </div>

            <!-- Username -->
            <div class="form-outline mb-4">
                <input type="text"
                       class="form-control"
                       id="pseudo"
                       name="pseudo"
                       placeholder="Username"
                       required>
            </div>

            <!-- Email -->
            <div class="form-outline mb-4">
                <input type="email"
                       class="form-control"
                       id="email" name="email"
                       placeholder="Email"
                       required>
            </div>

            <!-- Password -->
            <div class="form-outline mb-4">
                <input type="password"
                       class="form-control"
                       id="password"
                       name="password"
                       placeholder="Password"
                       minlength="8"
                       maxlength="20"
                       onchange="verifyPassword();"
                       required>
            </div>

            <!-- Confirm Password -->
            <div class="form-outline mb-4">
                <input type="password"
                       class="form-control"
                       id="confirmpassword"
                       name="confirmpassword"
                       placeholder="Confirm Password"
                       onchange="verifyPassword();"
                       required>
            </div><br>

            <!-- SignUp button -->
            <div class="pt-1 mb-4">
                <button class="btn btn-info btn-lg btn-block" type="submit" id="signUpButton">
                    Sign Up
                </button>
            </div>

            <!-- Cancel Button -->
            <div class="pt-1 mb-4">
                <button class="btn btn-info btn-lg btn-block" type="submit">
                    Cancel
                </button>
            </div>

            <?php if (isset($errorMessage)) { ?>
            <p class="alert alert-danger"> <?php echo $errorMessage;
                } ?></p>

        </form>

    </div>
    </body>
    </html>

<script>
    function verifyPassword() {
        {
            var password  = document.getElementById("password");
            var confirmpassword  = document.getElementById("confirmpassword");

            if(password.value !== confirmpassword.value){
                confirmpassword.setCustomValidity("Passwords don't match")
            } else {
                confirmpassword.setCustomValidity("")
            }
        }
    }
</script>



<?php
$content = ob_get_clean();
require "gabarit.php";
?>