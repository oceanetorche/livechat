<?php

/**
 * @file      users.php
 * @brief     File description
 * @author    Created by Henry Burgat & Océane Torche
 * @version   23.11.2021
 */

require 'model/userManagement.php';

/**
 * @brief This function aims to add a user to the DB
 * @param $data information from form given by user
 */
function signup($data){
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

/**
 * @brief This function aims to log to the chat if the user is in the DB
 * @param $data information from form given by user
 */
function login($data){
    if(isset($data['email']) && isset($data['pwd'])){
        if(checkLogin($data)){
            header("Location: " . 'index.php?action=chatrooms');
        }else{
            $errorMessage = "Email incorrect";
            require 'view/login.php';
        }
    }else{
        require 'view/login.php';
    }
}


function modify($data){
    quitChatroom($_SESSION['id']);
    if(isset($data['username'])){
        if(checkUsernameAlreadyExists($data['username'])){
            $errorMessage = "Username déjà utilisé ";
            require 'view/modify.php';
        }else{
            updateUsername($data['username']);
            $_SESSION['username'] = $data['username'];
            header("Location: " . 'index.php?action=chatrooms');
        }
    }else {
        require 'view/modify.php';
    }
}

/**
 * @brief This function aims to disconnect the user
 */
function logout(){
    if(isset($_SESSION['id'])){
        updateStatus($_SESSION['id']);
        quitChatroom($_SESSION['id']);
        session_destroy();
        $_SESSION = array();
        require 'view/login.php';
    }else {
        require 'view/login.php';
    }
}

/**
 * @brief This function aims to update chatroom in which the user is
 * @param $chatroomId id of the chatroom in which the user is connected
 */
function updateChatroom($chatroomId){
    updateUserChatroom($chatroomId);
    if($chatroomId==null){
        header("Location: " . 'index.php?action=chatrooms');
    }

}
