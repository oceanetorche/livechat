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


<body id="homeBody">

<div id="homeLittlewrapper" class="col-12 col-xs-12 col-sm-12 col-md-8 col-lg-8">

    <!-- head  -->
    <div id="homeHead" class="sticky-top">
        <h1 id="headUp">
            WASSAP
        </h1>
        <hr style="height: 5px; background-color: white">
        <div class="d-flex justify-content-between align-items-center" id="headDown">
            <div class="#">
                Welcome <?php if (isset($_SESSION['username'])) echo $_SESSION['username']; ?>
            </div>
            <a class="btn btn-danger " href="index.php?action=logout">
                LOG OUT
            </a>
        </div>
        <hr style="height: 5px; background-color: white">
    </div>


    <!-- main  -->
    <div id="homeMain">

            <div class="chatroom row align-items-center">
                <div class="col-8 col-sm-9">
                    <h2 id="chatroomTitle"><?php if (isset($chatroom['name'])) echo $chatroom['name']; ?></h2>
                    <p id="chatroomDescription"><?php
                        $nbr = 0;
                        foreach ($arrayPeople as $person) {
                            if ($person['Chatroom_id'] == $chatroom['id']) {
                                $nbr++;
                            }
                        }

                        if (isset($chat['nb_users_max'])) echo $nbr . " / " . $chatroom['nb_users_max']; ?></p>
                </div>
                <div class="col-4 col-sm-3">
                    <a class="btn btn-info btn-block" href="index.php?action=disconnect">Disconnect</a>
                </div>

                <div class="col-12" style="background-color:yellow;">
                    <?php
                    if(isset($messages)){
                        foreach ($messages as $msg){
                            echo '<div style="background-color:white;border: 1px black solid;">';
                            echo $msg[2] . " " .  " " . $msg[1] . "<br> " . $msg[0] ;
                            echo '</div>';
                        }
                    }


                    echo'<div class="form-outline mb-4">
                    <input type="texr" class="form-control" id="writeMessageHere" name="writeMessageHere" placeholder="Write Message Here">
                </div>';


                    ?>
                </div>

            </div>
            <br>



    </div>
</div>

<?php
$content = ob_get_clean();

require "gabarit.php";
?>
