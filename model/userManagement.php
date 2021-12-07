<?php

/**
 * @file      userManagement.php
 * @brief     File description
 * @author    Created by Henry Burgat & Océane Torche
 * @version   23.11.2021
 */


require "dbConnector.php";

/**
 * Adds user to DB
 * @param $data personal data from form
 * @return int 0 if errror 1 if writes in DB
 */
function addToDB($data){

    $firstname = $data['firstname'];
    $lastname = $data['lastname'];
    $username = $data['pseudo'];
    $email = $data['email'];
    $pwd = password_hash($data['password'],PASSWORD_DEFAULT);
    $registration = date('Y/m/d H:i:s');
    $status = 2; //means disconnected
    $chatroom = null; //not in a room

    if(checkUsernameAlreadyExists($username)){
        return 0;
    }else{

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


}

/**
 * Checks whether the login matches the DB
 * @param $data information from form
 * @return bool true if login is correct, false is login is incorrect
 */
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

    }else{
        return false;
    }
}


/**
 * Checks if the username already exists in DB
 * @param $givenUsername username given in form
 * @return bool true if exists, false if doesn't exist
 */
function checkUsernameAlreadyExists($givenUsername){

    $query = "SELECT * from users WHERE username=:username";

    $params = array(':username' => $givenUsername);
    $dataDB = executeQuerySelect($query,$params);

    if($dataDB !=null){
        return true;
    }else{
        return false;
    }

}