<?php

/**
 * @file      index.php
 * @brief     This file is the rooter managing the link with controllers
 * @author    Created by Henry Burgat & Océane Torche
 * @version   23.11.2021
 */

session_start();

require "controller/controller.php";
require "controller/users.php";
require "controller/chats.php";

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'signup' :
            signup($_POST);
            break;
        case 'home' :
            home();
            break;
        case 'login':
            login($_POST);
            break;
        case 'chatrooms':
            displayChatrooms();
            break;
        case 'logout':
            logout();
            break;
        case 'connect':
            updateChatroom($_GET['id']);
            displayMessages($_GET['id']);
            break;
        case 'updateMessage':
            updateMessage($_POST,$_GET);
            break;
        case 'modify':
            modify($_POST);
            break;
        case 'disconnect':
            updateChatroom(null);
            break;
        default :
            signup($_POST);
    }
} else {
    welcome();
}