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

function displayMessages($id){
    $messages = getMessage($id);
    $arrayChatrooms = getChatrooms();


    foreach ($arrayChatrooms as $chat){
        if($chat['id']==$id){
            $chatroom = $chat;
        }
    }

    $arrayPeople = getPeopleInChatroom();
    require "view/chatroom.php";
}

function updateMessage($messages,$info){
    updateMessageInDB($messages,$info);
    displayMessages($info['chatid']);
}
