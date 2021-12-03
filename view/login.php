<?php

/**
 * @file      login.php
 * @brief     File description
 * @author    Created by Henry Burgat & Océane Torche
 * @version   23.11.2021
 */

ob_start();
$title = "Login";

?>
<div>
    <div class="container-fluid" id="formLogin">
        <form>
            <h3>Log in</h3>

            <div class="form-outline mb-4">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            </div>

            <div class="form-outline mb-4">
                <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password">
            </div>

            <div class="pt-1 mb-4">
                <button class="btn btn-info btn-lg btn-block" type="submit">Login</button>
            </div>

            <p>Don't have an account? <a href="index.php?action=goToSignUp.php">Create an account</a></p>
        </form>
    </div>
</div>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>