<?php

/**
 * @file      signup.php
 * @brief     This view is designed to display signup page to register
 * @author    Created by Henry Burgat & Océane Torche
 * @version   23.11.2021
 */

ob_start();
$title = "Sign up";


?>
    <html>
    <body id = "signUpBody">
        <div style="">
            <div id="formWrapper" class="trans">

                <form id="formSignUp" method="post" action="index.php?action=signup">

                    <!-- Title -->
                    <div class="formSignBrand">
                        WASSAP
                    </div>

                    <!-- Subtitle -->
                    <h3>
                        Inscrivez-vous
                    </h3><br>

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
                        <button class="btn btn-lg btn-block formSignButton simpleNeonButton" type="submit" id="signUpButton"">
                            Sign Up
                        </button>
                    </div>



                    <!-- Cancel Button -->
                    <div class="pt-1 mb-4">
                        <a class="btn btn-lg btn-block formSignButton simpleNeonButton" href="index.php?action=login">
                            Cancel
                        </a>
                    </div>

                    <?php if (isset($errorMessage)) { ?>
                    <p class="alert alert-danger"> <?php echo $errorMessage;
                        } ?></p>
                </form>

            </div>
        </div>
    </body>
    </html>


    <script type="text/javascript" src="js/verifyPassword.js"></script>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>