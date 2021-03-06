<?php

/**
 * @file      login.php
 * @brief     This view is designed to display login page to login
 * @author    Created by Henry Burgat & Océane Torche
 * @version   23.11.2021
 */

ob_start();
$title = "Login";

?>
    <html>
    <body id="logInBody">
        <div id="formWrapper" class="trans">

            <form id="formLogin" method="post" action="index.php?action=login">

                <!-- Title -->
                <div class="formSignBrand">
                    WASSAP
                </div>

                <!-- Subtitle -->
                <h3>
                    Log in
                </h3><br>

                <!-- Email -->
                <div class="form-outline mb-4">
                    <input type="email"
                           class="form-control"
                           id="email"
                           name="email"
                           placeholder="Email">
                </div>

                <!-- Password -->
                <div class="form-outline mb-4">
                    <input type="password"
                           class="form-control"
                           id="pwd"
                           name="pwd"
                           placeholder="Password">
                </div>

                <div class="pt-1 mb-4">
                    <button class="btn btn-lg btn-block formSignButton simpleNeonButton" type="submit">Login</button>
                </div>

                <?php if(isset($errorMessage)) {?>
                <p class="alert alert-danger"> <?php echo $errorMessage; }?></p>

                <p>Don't have an account? <a href="index.php?action=signup">Inscrivez-vous</a></p>
            </form>

        </div>
    </body>
    </html>

    <script type="text/javascript" src="js/verifyPassword.js"></script>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>