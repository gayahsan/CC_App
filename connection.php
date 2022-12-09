<?php


$servername = "cc-mysql-server1.mysql.database.azure.com";
$username = "MyS1@cc-mysql-server1";
$password = "CHAMOD12345@c";
$database = "crud";

// create a connection object


$con = new mysqli($servername, $username, $password, $database);

if($con->connect_error){
    die("Connection failed");
}

?>