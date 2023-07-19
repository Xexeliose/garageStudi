<?php
session_start();
if (isset($_SESSION['user_login'])) {

include "dbConnect.php";

$type = $_POST['type'];
$login = $_POST['login'];
$sqlQuery ="";

if ($type == "add") {


    $password = $_REQUEST['password'];

    $sqlQuery = "INSERT INTO users (login, password) VALUES ('$login', '$password')";
    if (mysqli_query($conn, $sqlQuery)) {
        echo "<h3>data inserted in a database successfully."
            . " Please browse your localhost php my admin"
            . " to view the updated data</h3>";

    } else {
        echo "ERROR: Hush! Sorry $sqlQuery. "
            . mysqli_error($conn);
    }
}

if ($type == "del") {
    $sqlQuery = "DELETE FROM `users` WHERE `login`= '$login'";
    if (mysqli_query($conn, $sqlQuery)) {
        echo "<h3>data deleted in a database successfully."
            . " Please browse your localhost php my admin"
            . " to view the updated data</h3>";

    } else {
        echo "ERROR: Hush! Sorry $sqlQuery. "
            . mysqli_error($conn);
    }
}


$conn->close();
}
?>