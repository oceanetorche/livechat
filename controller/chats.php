<?php

/**
 * @file      chats.php
 * @brief     This controller is designed to manage chatrooms
 * @author    Created by Henry Burgat and Océane Torche
 * @version   08.12.2021
 */


require "model/chatroomManager.php";

/**
 * @brief This function aims to display the given chatrooms
 */
function displayChatrooms(){
    if(isset($_SESSION['id'])){
        quitChatroom($_SESSION['id']);
    };
    $arrayChatrooms = getChatrooms();
    $arrayPeople = getPeopleInChatroom();
    require "view/home.php";
}

/**
 * @brief This function aims to display the messages in a given chatroom
 * @param $id chatroom
 */
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

/**
 * @brief This function aims to display a new message in the chatroom
 * @param $messages written by the user
 * @param $info user and chatroom
 */
function updateMessage($messages,$info){
    updateMessageInDB($messages,$info);
    displayMessages($info['chatid']);
}
