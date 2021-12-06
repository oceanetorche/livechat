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
    $pwd = password_hash($data['password'],PASSWORD_DEFAULT);
    $registration = date('Y/m/d H:i:s');
    $status = 2; //means disconnected
    $chatroom = null; //not in a room

    //open DB Connection
    $dbConnexion = openDBConnexion();


    if ($dbConnexion != null) {
        //preparation query
       $statement = $dbConnexion->prepare('INSERT INTO users (firstname, lastname,username,email,password,registration_date,Chatroom_id,Users_states_id) values (:firstname,:lastname,:username,:email,:pwd,:registration,:chat,:status)');


        $statement->bindParam(':firstname',$firstname);
        $statement->bindParam(':lastname',$lastname);
        $statement->bindParam(':username',$username);
        $statement->bindParam(':email',$email);
        $statement->bindParam(':pwd',$pwd);
        $statement->bindParam(':registration',$registration);
        $statement->bindParam(':chat',$chatroom);
        $statement->bindParam(':status',$status);


        //we execute the request with the parameters used on the query
        $statement -> execute();


        return 1;

    }
    $dbConnexion = null;

     return 0;
}


function checkLogin($data){

    $email = $data['email'];
    $password = $data['pwd'];

    $query="SELECT password FROM users WHERE email=:femail ";
    $params = array(':femail' => $email);

    $dataDB = executeQuerySelect($query,$params);


    if($dataDB !=null){
        foreach ($dataDB as $key => $tab){
            foreach ($tab as $key2 => $pw){
                if(password_verify( $password,$pw)){
                    return true;
                }else{
                    return false;
                }
            }
        }

        return true;

    }else{
        return false;
    }
}