<?php

/**
 * @file      home.php
 * @brief     File description
 * @author    Created by Henry Burgat & Océane Torche
 * @version   23.11.2021
 */

ob_start();
$title = "Home";

?>

    <html>
    <body id="homeBody">



    <div id="homeLittlewrapper" class="col-12 col-xs-12 col-sm-12 col-md-8 col-lg-8">

        <!-- head  -->
        <div id="homeHead" class="sticky-top">
            <h1 id="headUp">
                <a href="index.php?action=chatrooms">WASSAPP</a>
            </h1>
            <hr style="height: 5px; background-color: white">
            <div class="d-flex justify-content-between align-items-center" id="headDown">
                <div class="#">
                    Welcome <?php if(isset($_SESSION['username'])) echo $_SESSION['username'];?>
                    <a class="btn" href="index.php?action=modify">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    </a>
                </div>

                <a class="btn btn-danger " href="index.php?action=logout">
                    LOG OUT
                </a>
            </div>
            <hr style="height: 5px; background-color: white">
        </div>


        <!-- FORM  -->

        <form id="formLogin" method="post" action="index.php?action=modify">

            <h13>Change username </h13>
            <div class="form-outline mb-4">
                <input type="text" class="form-control" name="username" placeholder="Username">
            </div>

            <div class="pt-1 mb-4">
                <button class="btn btn-info btn-lg btn-block" type="submit">Confirm</button>
            </div>
            <?php if(isset($errorMessage)) {?>
            <p class="alert alert-danger"> <?php echo $errorMessage; }?></p>

        </form>

    </div>



    </body>
    </html>


<?php
$content = ob_get_clean();
require "gabarit.php";
?>