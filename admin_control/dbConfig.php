<?php
//$dbHost     = "127.0.0.1";
//$dbUsername = "fastntcy_ship";
//$dbPassword = "Kill@money1";
//$dbName     = "fastntcy_shipment";


$dbHost     = "127.0.0.1";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "shipment";

$con = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}


?>

