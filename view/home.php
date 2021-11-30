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


<h1>Welcome</h1>


<?php
$content = ob_get_clean();
require "gabarit.php";
?>