<?php

$dbServer = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "yaredb";

$con = mysqli_connect($dbServer, $dbUsername, $dbPassword, $dbName);
if(mysqli_connect_errno()){
    echo "Failed To Connect";
    exit();
}
echo "Connection Success";
?>
