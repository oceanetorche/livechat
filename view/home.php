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
                WASSAP
            </h1>
            <hr style="height: 5px; background-color: white">
            <div class="d-flex justify-content-between align-items-center" id="headDown">
                <div class="#">
                    Welcome <?php if(isset($_SESSION['username'])) echo $_SESSION['username'];?>
                </div>
                <a class="btn btn-danger " href="index.php?action=logout">
                    LOG OUT
                </a>
            </div>
            <hr style="height: 5px; background-color: white">
        </div>


        <!-- main  -->
        <div id="homeMain">
            <?php foreach($arrayChatrooms as $chat){ ?>
            <div class="chatroom row align-items-center">
                <div class="col-8 col-sm-9">
                    <h2 id="chatroomTitle"><?php if(isset($chat['name'])) echo $chat['name'];?></h2>
                    <p id="chatroomDescription"><?php
                        $nbr=0;
                        foreach ($arrayPeople as $person){
                            if($person['Chatroom_id']==$chat['id']){
                                $nbr++;
                            }
                        }

                        if(isset($chat['nb_users_max'])) echo $nbr. " / " . $chat['nb_users_max'];?></p>
                </div>
                <div class="col-4 col-sm-3">
                    <a class="btn btn-info btn-block" href="index.php?action=connect&id=<?php echo $chat['id']?>">Connect</a>
                </div>

            </div>
                <br>
            <?php }?>

        </div>
    </div>



</body>
</html>


<?php
$content = ob_get_clean();
require "gabarit.php";
?>