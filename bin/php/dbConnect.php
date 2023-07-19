<?php 


$servername = "eu-cdbr-west-03.cleardb.net";
$username = "baedef35e04728";
$password = "5d33c0ab";
$dbname = "heroku_25f6c313623c56a";

/*
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "mydb";
*/
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    ?>