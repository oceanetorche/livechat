<?php

/**
 * @file      controller.php
 * @brief     File description
 * @author    Created by Henry Burgat & Océane Torche
 * @version   23.11.2021
 */

function home(){
    require "view/home.php";
}

function welcome(){
    require "view/login.php";
}

function goToSignUp(){
    require "view/signup.php";
}
