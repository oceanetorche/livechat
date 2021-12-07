<?php

/**
 * @file      dbConnector.php
 * @brief     This controller is designed to manage database accesses and transactions
 * @author    Created by Henry Burgat & Océane Torche
 * @version   28.11.2021
 */

/**
 * @brief This function is designed to manage the database connexion. Closing will be not proceeded there. The client is responsible of this.
 * @return PDO|null
 */
function openDBConnexion()
{
    $tempDBConnexion = null;

    $sqlDriver = 'mysql';
    $hostname = 'localhost';
    $port = 3306;
    $charset = 'utf8';
    $dbName = 'LiveChat_DB';
    $userName = 'livechat'; //to change
    $userPwd = 'Pa$$w0rd';
    $dsn = $sqlDriver . ':host=' . $hostname . ';dbname=' . $dbName . ';port=' . $port . ';charset=' . $charset;

    try {
        $tempDBConnexion = new PDO($dsn, $userName, $userPwd);
    } catch (PDOException $exception) {
        echo 'Connection failed' . $exception->getMessage();
		die();
    }
    return $tempDBConnexion;
}


function executeQuerySelect($query, $params)
{
    $queryResult = null;

    //open DB Connection
    $dbConnexion = openDBConnexion();

    //if connection is not null
    if ($dbConnexion != null) {
        //preparation query
        $statement = $dbConnexion->prepare($query);

        //we execute the request with the parameters used on the query
        $statement -> execute($params);

        //we prepare the results for the navigator
        $queryResult = $statement->fetchAll();

    }
    $dbConnexion = null; // Fermeture de ma connection à la BD*/
    return $queryResult;
}