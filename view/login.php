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
    <!-- content page -->
    <div>
        <div class="container col-10 col-xs-10 col-sm-8 col-md-6 col-lg-6 col-xl-6">
            <div>
                <h1 id="title">WASSAP</h1>
            </div>
            <form class="form" method="post" action="index.php?action=login">
                <h4>Connectez-vous</h4>

                <div class="form-group">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password">
                </div>
                <p>Don't have an account? <a href="signup.php">Create an account</a></p>
                <input type="submit" value="login"><br>
                <input type="reset" value="Annuler">
            </form>
        </div>
    </div>
    <!---->

<?php
$content = ob_get_clean();
require "gabarit.php";
?>