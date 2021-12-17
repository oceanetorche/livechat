<?php

/**
 * @file      chatroomManager.php
 * @brief     File description
 * @author    Created by Oceane.TORCHE
 * @version   08.12.2021
 */


/**
 * @brief This function gets the chatrooms available in the DB
 * @return array|null
 */
function getChatrooms(){
    $queryResult = null;

    $dbConnexion = openDBConnexion();

    $query = "SELECT id,name,nb_users_max from chatrooms";

    if ($dbConnexion != null) {

        $statement = $dbConnexion->prepare($query);
        $statement -> execute();
        $queryResult = $statement->fetchAll();

    }
    $dbConnexion = null;
    return $queryResult;
}

/**
 * @brief This function gets people connected to a chatroom in DB
 * @return array|null
 */
function getPeopleInChatroom(){
    $nbPeopleInChatroom = null;

    $dbConnexion = openDBConnexion();

    $query = "SELECT Chatroom_id from users";

    if ($dbConnexion != null) {

        $statement = $dbConnexion->prepare($query);
        $statement -> execute();
        $nbPeopleInChatroom = $statement->fetchAll();

    }
    $dbConnexion = null;

    return $nbPeopleInChatroom;
}


/**
 * @brief This function gets the message of a chatroom in DB
 * @param $id
 * @return array|null
 */
function getMessage($id){
    $queryResult = null;
    $dbConnexion = openDBConnexion();

    $query = "SELECT messages.content, messages.sending_timestamp, users.username FROM messages LEFT JOIN users ON users.id = messages.User_id WHERE messages.Chatroom_id =" . $id ."";




    if ($dbConnexion != null) {

        $statement = $dbConnexion->prepare($query);
        $statement -> execute();
        $queryResult = $statement->fetchAll();

    }
    $dbConnexion = null;
    return $queryResult;
}


function updateMessageInDB($message,$info){

    $content = $message['writeMessageHere'];
    $user = $info['userid'];
    $chat = $info['chatid'];


    $query = "INSERT INTO messages (content,sending_timestamp,User_id,Chatroom_id) VALUES (:content,NOW(),:uid,:cid)";

    $params = array (':content' =>$content,':uid' => $user, ':cid' =>$chat);

    executeQueryInsert($query, $params);

}