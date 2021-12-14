<?php

/**
 * @file      chatroom.php
 * @brief     File description
 * @author    Created by Henry Burgat & Océane Torche
 * @version   23.11.2021


 */


ob_start();
$title = "Chatroom";
?>


<html>


<body>
    <?php

    foreach ($messages as $msg){
        echo $msg[0] . " " . $msg[1];
    }

    ?>






</body>
</html>



<?php
$content = ob_get_clean();

require "home.php";
?>
