<?php

/**
 * @file      chatroomManager.php
 * @brief     File description
 * @author    Created by Oceane.TORCHE
 * @version   08.12.2021
 */


function getChatrooms(){
    $queryResult = null;

    //open DB Connection
    $dbConnexion = openDBConnexion();

    $query = "SELECT id,name,nb_users_max from chatrooms";

    if ($dbConnexion != null) {
        //preparation query
        $statement = $dbConnexion->prepare($query);

        //we execute the request with the parameters used on the query
        $statement -> execute();

        //we prepare the results for the navigator
        $queryResult = $statement->fetchAll();

    }
    $dbConnexion = null; // Fermeture de ma connection à la BD*/
    return $queryResult;
}


function getPeopleInChatroom(){
    $nbPeopleInChatroom = null;

    //open DB Connection
    $dbConnexion = openDBConnexion();

    $query = "SELECT Chatroom_id from users";

    if ($dbConnexion != null) {
        //preparation query
        $statement = $dbConnexion->prepare($query);

        //we execute the request with the parameters used on the query
        $statement -> execute();

        //we prepare the results for the navigator
        $nbPeopleInChatroom = $statement->fetchAll();

    }
    $dbConnexion = null; // Fermeture de ma connection à la BD*/

    return $nbPeopleInChatroom;
}