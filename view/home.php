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
<body>
<div>
    <!-- header -->
    <div id="headerHome ">

    </div>
    <!-- main -->
    <div id="mainHome">

    </div>
</div>
</body>
</html>


<?php
$content = ob_get_clean();
require "gabarit.php";
?>