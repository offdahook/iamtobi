<?php
$serverName = "db001304.mydbserver.com";
$dbUsername = "p550594";
$dbPassword = "14m1nD4ng3r!";
$dbName = "usr_p550594_3";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if (!$conn){

    die("Connection failed: " . mysqli_connect_error());
}
?>