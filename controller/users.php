<?php

/**
 * @file      users.php
 * @brief     File description
 * @author    Created by Henry Burgat & Océane Torche
 * @version   23.11.2021
 */

require 'model/userManagement.php';

function signup($data){
    // check infos have been set and if we come from login page
    if(isset($data['firstname']) && isset($data['lastname']) && isset($data['pseudo']) && isset($data['email']) && isset($data['password'])){
        if(addToDB($data)){
            require 'view/login.php';
        }else{
            $errorMessage = "Nom d'utilisateur ou email déjà utilisé";
            require 'view/signup.php';
        }
    }else{

        require 'view/signup.php';
    }
}

function login($data){
    if(isset($data['email']) && isset($data['pwd'])){
        if(checkLogin($data)){
            updateStatus($_SESSION['id']);
            header("Location: " . 'index.php?action=chatrooms');
        }else{
            $errorMessage = "Email incorrect";
            require 'view/login.php';
        }
    }else{
        require 'view/login.php';
    }
}

function logout(){
    updateStatus($_SESSION['id']);
    session_destroy();
    $_SESSION = array();
    require 'view/login.php';
}