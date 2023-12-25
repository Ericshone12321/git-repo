<?php
require_once("DBC.php");

$serverName = "140.127.74.201:9001";
$userName = "root";
$password = "root";
$db = "bigdata";

try {
    DBConnectionHandler::setConnection (
        $serverName,
        $userName,
        $password,
        $db
    );
    $connection = DBConnectionHandler::getConnection();
} catch(Exception $e) {
    echo " Error " . $sql . "</br>" . $e ->getMessage();
}
?>