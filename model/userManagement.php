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
    $username = $data['username'];
    $email = $data['email'];
    $password = $data['password'];
    $registration = new DateTime('now');
    $status = 2;
    $chatroom = null;


    $query="INSERT INTO users (firstname, lastname,username,email,registration_date,Chatroom_id,Users_states_id) 
values (firstname=:ffn,lastname=:fln,username=:fun,email=:fem,registration_date=:rd,Chatroom_id=:chi,Users_states_id:=st) ";
    $params = array(':ffn' => $firstname,':fln' => $lastname,':fun' => $username, ':fem' => $email, ':fpw' => $password,':rd'=>$registration,':chi'=>$chatroom,':st'=>$status);

    //open DB Connection
    $dbConnexion = openDBConnexion();


    if ($dbConnexion != null) {
        //preparation query
        $statement = $dbConnexion->prepare($query);

        //we execute the request with the parameters used on the query
        $statement -> execute($params);

        $dbConnexion = null; // Fermeture de ma connection à la BD*/
        return $dbConnexion->affected_rows;

    }

     return -1;
}