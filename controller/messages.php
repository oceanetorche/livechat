<?php

/**
 * @file      messages.php
 * @brief     File description
 * @author    Created by Oceane.TORCHE
 * @version   14.12.2021
 */


require "model/messageManager.php";

function displayMessages($id){
    $messages = getMessage($id);
    require "view/chatroom.php";
}

