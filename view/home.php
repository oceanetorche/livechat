<?php

/**
 * @file      home.php
 * @brief     This file is designed to display the home page
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
                    Welcome <?php if(isset($_SESSION['username'])) echo $_SESSION['username'];?>
                    <a class="modifyIcon" href="index.php?action=modify"><i class="bi bi-pencil-square"></i></a>
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

        </header><br>

        <!-- ---------------------------------- Main---------------------------------- -->
        <main class="main" id="mainHome">
            <?php foreach($arrayChatrooms as $chat){ ?>
            <div class="chatroomHome d-flex justify-content-between">
                <div class="chatroomInformation align-self-center col-12 col-sm-9">
                    <div id="chatroomTitle">
                        <?php if(isset($chat['name'])) echo $chat['name'];?>
                    </div>
                    <div id="chatroomDescription">
                        <?php
                        $nbr=0;
                        foreach ($arrayPeople as $person){
                            if($person['Chatroom_id']==$chat['id']){
                                $nbr++;
                            }
                        } ?>


                    </div>
                    <div>
                        <?php if(isset($chat['nb_users_max'])) echo $nbr. " / " . $chat['nb_users_max'] . " ";?> <i class="bi bi-person-fill"></i>
                    </div>
                </div>

                <div class="connectButton align-self-center col-12 col-sm-3">
                    <div class="simpleNeonButton">
                        <a href="index.php?action=connect&id=<?php echo $chat['id']?>">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            Connect</a>
                    </div>
                </div>
            </div>
            <?php }?>
        </main><br>

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