<?php

/**
 * @file      signup.php
 * @brief     File description
 * @author    Created by Henry Burgat & Océane Torche
 * @version   23.11.2021
 */

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Sign up</title>
</head>
<body>

<!-- content page -->
<section>
    <div>
        <div>

            <div>
                <form>
                    <h4>
                        Inscrivez-vous
                    </h4>

                    <div>
                        <input type="text" name="firstname" placeholder="Prénom">
                    </div>
                    <div>
                        <input type="text" name="lastname" placeholder="Nom">
                    </div>

                    <div>
                        <input type="text" name="pseudo" placeholder="Pseudo">
                    </div>

                    <div>
                        <input type="email" name="email" placeholder="Adresse email">
                    </div>

                    <div>
                        <input type="password" name="password" placeholder="Mot de passe">
                    </div>
                    <input type="submit" value="S'inscrire"><br>
                    <input type="reset" value="Annuler">

                </form>
            </div>
        </div>
    </div>
</section>

</body>
</html>