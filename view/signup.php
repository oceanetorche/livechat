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
                <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Firstname">
            </div>
            <div class="form-outline mb-4">
                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Lastname">
            </div>
            <div class="form-outline mb-4">
                <input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="Username">
            </div>
            <div class="form-outline mb-4">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            </div>
            <div class="form-outline mb-4">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
            <div class="form-outline mb-4">
                <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password">
            </div>

            <div class="pt-1 mb-4">
                <button class="btn btn-info btn-lg btn-block" type="submit">Sign Up</button>
            </div>
            <div class="pt-1 mb-4">
                <button class="btn btn-info btn-lg btn-block" type="submit">Annuler</button>
            </div>

        </form>

    </div>
    </body>
    </html>


<?php
$content = ob_get_clean();
require "gabarit.php";
?>