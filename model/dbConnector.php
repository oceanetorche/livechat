<?php

/**
 * @file      dbConnector.php
 * @brief     This controller is designed to manage database accesses and transactions
 * @author    Created by Henry Burgat & Océane Torche
 * @version   28.11.2021
 */

/**
 * @brief This function is designed to manage the database connexion. Closing will be not proceeded there. The client is responsible of this.
 * @return PDO
 */
function openDBConnexion()
{
    $tempDBConnexion = null;

    $sqlDriver = 'mysql';
    $hostname = '10.229.32.181';
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

/**
 * @brief This function executes a select query in DB with parameter
 * @param $query to execute
 * @param $params to add to query
 * @return array|null array of objects or null if no object found
 */
function executeQuerySelect($query, $params)
{
    $queryResult = null;

    $dbConnexion = openDBConnexion();

    if ($params == null) {
        $statement = $dbConnexion->prepare($query);

        $statement -> execute();

        $queryResult = $statement->fetchAll();

        $dbConnexion = null;
        return $queryResult;
    }


    if ($dbConnexion != null) {
        $statement = $dbConnexion->prepare($query);

        $statement -> execute($params);

        $queryResult = $statement->fetchAll();

    }
    $dbConnexion = null;
    return $queryResult;
}


/**
 * @brief This function executes an insert query in DB with parameter
 * @param $query to execute
 * @param $param to add to the query
 * @return int 1 no problem or 0 if problem
 */
function executeQueryInsert($query,$param)
{
    $dbConnexion = openDBConnexion();

    if ($param == null) {
        $statement = $dbConnexion->prepare($query);
        $statement -> execute();

        return 1;

    }

    if ($dbConnexion != null) {
        $statement = $dbConnexion->prepare($query);
        $statement -> execute($param);

        return 1;

    }
    $dbConnexion = null;

    return 0;
}


/**
 * @brief This function executes an update query in DB with parameter
 * @param $query to execute
 * @param $param to add to the query
 * @return int 1 no problem or 0 if problem
 */
function executeQueryUpdate($query,$param)
{
    $dbConnexion = openDBConnexion();

    if ($dbConnexion != null) {
        $statement = $dbConnexion->prepare($query);
        $statement -> execute($param);

        return 1;

    }
    $dbConnexion = null;

    return 0;
}


/**
 * @brief This function executes a delete query in DB with parameter
 * @param $query to execute
 * @param $param to add to the query if not null
 * @return int 1 no problem or 0 if problem
 */
function executeQueryDelete($query,$param)
{
    $dbConnexion = openDBConnexion();

    if ($param == null) {
        $statement = $dbConnexion->prepare($query);
        $statement -> execute();

        return 1;

    }

    if ($dbConnexion != null) {
        $statement = $dbConnexion->prepare($query);
        $statement -> execute($param);

        return 1;

    }
    $dbConnexion = null;

    return 0;
}
