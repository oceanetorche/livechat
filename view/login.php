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
<section>
    <div>
        <div>
            <div>
                <form method="post" action="index.php?action=login">
                    <h4>Connectez-vous</h4>

                    <div>
                        <input type="email" name="email" placeholder="Adresse email">
                    </div>

                    <div>
                        <input type="password" name="password" placeholder="Mot de passe">
                    </div>
                    <input type="submit" value="login"><br>
                    <input type="reset" value="Annuler">

                </form>
            </div>
        </div>
    </div>
</section>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>