<?php

/**
 * @file      userManagement.php
 * @brief     File description
 * @author    Created by Henry Burgat & Océane Torche
 * @version   23.11.2021
 */


require "dbConnector.php";


function addToDB($data){

    $firstname = $data['firstname'];
    $lastname = $data['lastname'];
    $username = $data['pseudo'];
    $email = $data['email'];
    $pwd = $data['password'];
    $registration = date('Y/m/d H:i:s');
    $status = 2;
    $chatroom = null;


    $query="INSERT INTO users (firstname, lastname,username,password,email,registration_date,Chatroom_id,Users_states_id) values (firstname=:ffn,lastname=:fln,username=:fun,email=:fem,password=:fpw,registration_date=:rd,Chatroom_id=:chi,2) ";
    $params = array(':ffn' => $firstname,':fln' => $lastname,':fun' => $username, ':fem' => $email, ':fpw' => $pwd,':rd'=>$registration,':chi'=>$chatroom);



    //open DB Connection
    $dbConnexion = openDBConnexion();


    if ($dbConnexion != null) {
        //preparation query
        $statement = $dbConnexion->prepare($query);


        //we execute the request with the parameters used on the query
        $statement -> execute($params);


        return 1;

    }
    $dbConnexion = null; // Fermeture de ma connection à la BD*/

     return 0;
}