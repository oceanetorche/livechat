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

<div id="homeBigWrapper">

    <div id="homeLittlewrapper" class="col-11 col-xs-11 col-sm-10 col-md-8 col-lg-8">
        <!-- head  -->
        <div id="homeHead">
            <h1>WASSAP</h1>
            <hr style="height: 5px; background-color: black">
            <div class="d-flex">
                <p class="col-8">Welcome <?php if(isset($_SESSION['username'])) echo $_SESSION['username'];?></p>
                <a  class="btn btn-danger col-4" href="index.php?action=logout">LOG OUT </a>

            </div>
        </div>


        <!-- main  -->
        <div id="homeMain">

            <?php foreach($arrayChatrooms as $chat){ ?>
            <div id="chatroom" class="chatroom">
                <h2 id="chatroomTitle"><?php if(isset($chat['name'])) echo $chat['name'];?></h2>
                <p id="chatroomDescription"><?php
                    $nbr=0;
                    foreach ($arrayPeople as $person){
                        if($person['Chatroom_id']==$chat['id']){
                            $nbr++;
                        }
                    }

                    if(isset($chat['nb_users_max'])) echo $nbr. " / " . $chat['nb_users_max'];?></p>
                <a class="btn btn-primary">Connect</a>
            </div>

             <?php }?>
        </div>

        <div id="headerHome ">

            <p>Chatroom: <?php
                if($_SESSION['chatroom'] == null) {
                    echo 'dans aucune room';
                }else{
                    echo $_SESSION['chatroom'];
                }
                ?></p>


        </div>

    </div>




</div>
</body>
</html>


<?php
$content = ob_get_clean();
require "gabarit.php";
?>