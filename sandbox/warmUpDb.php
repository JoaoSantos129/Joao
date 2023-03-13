<?php

$dbConnector = null;
$dsn = "mysql:host=localhost;dbname=snows";
$usr= "snows-connector";
$pwd= "snows123";

try{
    $dbConnector = new PDO($dsn, $usr, $pwd);

    //try to fetch snow boards data
    $query = "SELECT * FROM snows";
    $queryResult = null;

    $statement = $dbConnector->prepare($query); //prepare query
    $statement->execute();  //execute query
    $queryResult = $statement->fetchAll();  //prepare result for client

    $dbConnexion = null;
    return $queryResult;
}

catch (PDOException $ex){
    print($ex);
}
