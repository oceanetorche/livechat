<?php

/**
 * @file      signup.php
 * @brief     File description
 * @author    Created by Henry Burgat & Océane Torche
 * @version   23.11.2021
 */

ob_start();
$title = "Sign up";


?>
    <html>
    <body>
    <div id="formWrapper">

        <form id="formSignUp" method="post" action="index.php?action=signup">
            <h1>WASSAP</h1>
            <h3>Inscrivez-vous</h3>


            <div class="form-outline mb-4">
                <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Firstname"
                       pattern="^[a-zA-Z]+$" oninvalid="this.setCustomValidity('Letters only')"
                       oninput="this.setCustomValidity('')" required>
            </div>
            <div class="form-outline mb-4">
                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Lastname" pattern="^[a-zA-Z]+$" required>
            </div>
            <div class="form-outline mb-4">
                <input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="Username" required>
            </div>
            <div class="form-outline mb-4">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-outline mb-4">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password"
                       minlength="8" maxlength="20" onkeypress="verifyPassword();" required>
            </div>
            <div class="form-outline mb-4">
                <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password"
                       onkeypress="verifyPassword();" required>
            </div>

            <div class="pt-1 mb-4">
                <button class="btn btn-info btn-lg btn-block" type="submit" id="signUpButton">Sign Up</button>
            </div>
            <div class="pt-1 mb-4">
                <button class="btn btn-info btn-lg btn-block" type="submit">Annuler</button>
            </div>

            <p id="message"></p>

            <?php if(isset($errorMessage)) {?>
            <p class="alert alert-danger"> <?php echo $errorMessage; }?></p>

        </form>

    </div>
    </body>
    </html>

<script>
    function verifyPassword() {
        {
            var password  = document.getElementById("password").value;
            var confirmpassword  = document.getElementById("confirmpassword").value;

            if(password !== confirmpassword){
                document.getElementById('confirmpassword').oninvalid = function () {invalidPasswordMessage()};
                document.getElementById('signUpButton').disabled = true;
            } else {
                document.getElementById('signUpButton').disabled = false;
            }
        }
    }

    function invalidPasswordMessage() {
        alert("Password dont match");
    }
</script>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>