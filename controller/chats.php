<?php

/**
 * @file      chats.php
 * @brief     File description
 * @author    Created by Oceane.TORCHE
 * @version   08.12.2021
 */


require "model/chatroomManager.php";

/**
 * @brief This function aims to display the given chatrooms
 */
function displayChatrooms(){
    $arrayChatrooms = getChatrooms();

    $arrayPeople = getPeopleInChatroom();
    require "view/home.php";

}
