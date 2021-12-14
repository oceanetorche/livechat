<?php

/**
 * @file      messageManager.php
 * @brief     File description
 * @author    Created by Oceane.TORCHE
 * @version   14.12.2021
 */


function getMessage($id){
    $queryResult = null;
    $dbConnexion = openDBConnexion();



    //SELECT  FROM messages LEFT JOIN users ON users.id = messages.User_id;

    $query = "SELECT messages.content, messages.sending_timestamp, users.username FROM messages LEFT JOIN users ON users.id = messages.User_id WHERE messages.Chatroom_id =" . $id ."";

    if ($dbConnexion != null) {

        $statement = $dbConnexion->prepare($query);
        $statement -> execute();
        $queryResult = $statement->fetchAll();

    }
    $dbConnexion = null;
    return $queryResult;
}
