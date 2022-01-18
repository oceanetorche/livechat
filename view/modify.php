<?php

/**
 * @file      modify.php
 * @brief     This file is designed to display the modify page to change username
 * @author    Created by Henry Burgat & Océane Torche
 * @version   23.11.2021
 */

ob_start();
$title = "Home";

?>

    <html>

    <body>
        <div class="innerBody">

            <!-- ---------------------------------- Header---------------------------------- -->
            <header class="header sticky-top">

                <div class="hr"></div>

                <div class="headerUp container-fluid d-flex justify-content-start" id="brand">
                    <div class="align-self-center">
                        <a class="linkBrand" href="index.php?action=chatrooms">WASSAPP</a>
                    </div>
                </div>

                <div class="hr"></div>

                <div class="headerDown d-flex justify-content-between">
                    <div class="headerDownElements">
                        Welcome <?php if (isset($_SESSION['username'])) echo $_SESSION['username']; ?>
                    </div>
                    <div class="headerDownElements neonButton">
                        <a href="index.php?action=logout">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            Log Out <i class="bi bi-box-arrow-left"></i></a>
                    </div>
                </div>

                <div class="hr"></div>

            </header>
            <br>

            <!-- ---------------------------------- Main---------------------------------- -->
            <main class="main" id="mainHome">
                <!-- FORM  -->
                <div class="modifyBg">
                    <form id="formLogin" method="post" action="index.php?action=modify">

                        <h13>Change username</h13>
                        <div class="form-outline mb-4">
                            <input type="text" class="form-control" name="username" placeholder="Username">
                        </div>

                        <div class="pt-1 mb-4">
                            <button class="btn btn-lg btn-block formSignButton simpleNeonButton" type="submit">Confirm
                            </button>
                        </div>
                        <?php if (isset($errorMessage)) { ?>
                        <p class="alert alert-danger"> <?php echo $errorMessage;
                            } ?></p>
                    </form>
                </div>
            </main>
            <br>


            <!-- ---------------------------------- Footer---------------------------------- -->
            <footer class="footer">
                <div class="hr"></div>
                <div>
                    Produced by Océane TORCHE & Henry BURGAT
                </div>
                <div class="hr"></div>
            </footer>

        </div>
    </body>

    </html>


<?php
$content = ob_get_clean();
require "gabarit.php";
?>