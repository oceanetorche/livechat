<?php

/**
 * @file      index.php
 * @brief     File description
 * @author    Created by Henry Burgat & Océane Torche
 * @version   23.11.2021
 */

session_start();

require "controller/controller.php";
require "controller/users.php";

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
        case 'logout':
            logout();
            break;
        default :
            signup($_POST);
    }
} else {
    welcome();
}