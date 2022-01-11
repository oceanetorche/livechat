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
<div class="innerBody">

    <!-- ---------------------------------- Header---------------------------------- -->
    <header class="header sticky-top">

        <div class="hr"></div>

        <div class="headerUp container-fluid d-flex justify-content-start" id="brand">
            <div class="align-self-center">
                WASSAPP
            </div>
        </div>

        <div class="hr"></div>

        <div class="headerDown d-flex justify-content-between">
            <div class="headerDownElements">
                Welcome <?php if (isset($_SESSION['username'])) echo $_SESSION['username']; ?>
                <a href="index.php?action=modify"><i class="bi bi-pencil-square"></i></a>
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

    <!-- ---------------------------------- Main---------------------------------- -->
    <br>
    <main class="main">

        <div class="chatroom d-flex justify-content-between">
            <div class="chatroomInformation align-self-center col-12 col-sm-9">
                <div id="chatroomTitle">
                    <?php if (isset($chatroom['name'])) echo $chatroom['name']; ?>
                </div>
                <div id="chatroomDescription">
                    <?php
                    $nbr = 0;
                    foreach ($arrayPeople as $person) {
                        if ($person['Chatroom_id'] == $chatroom['id']) {
                            $nbr++;
                        }
                    } ?>


                </div>
                <div>
                    <?php if (isset($chat['nb_users_max'])) echo $nbr . " / " . $chatroom['nb_users_max'] . " "; ?> <i
                            class="bi bi-person-fill"></i>
                </div>
            </div>

            <div class="connectButton align-self-center col-12 col-sm-3">
                <div class="simpleNeonButton">
                    <a href="index.php?action=disconnect">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Disconnect</a>
                </div>
            </div>
        </div>
        <div class="col-12 messageInput">
            <?php
            if (isset($messages)) {
                foreach ($messages as $msg) {
                    echo '<div class="message">';
                    echo '<span class="timestamp">' . $msg[2] . " " . " " . $msg[1] . '</span><br> ' . $msg[0];
                    echo '</div>';
                }
            }


            echo '
                        <br>                                                          
                        <form style="padding: 15px;"id="formChatroom" method="post" action="index.php?action=updateMessage&chatid=' . $chatroom["id"] . '&userid=' . $_SESSION["id"] . '">
                            <div style="border: 1px solid black; border-radius: 10px" class="form-outline row">
                                <div class="col-10 col-sm-11">
                                    <input style="border: none" type="text" class="form-control" id="writeMessageHere" name="writeMessageHere" placeholder="Write Message Here" autocomplete="off" maxlength="200">
                                </div>                          
                                
                                <button class="col-2 col-sm-1" type="submit" style="border: none; background-color: transparent;" >
                                  <i class="bi bi-send " id="sendBiBi" style="margin-top: 10px;"></i>
                                 </button>
                                
                            </div>                          
                        </form>';
            ?>
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


<?php
$content = ob_get_clean();

require "gabarit.php";
?>
