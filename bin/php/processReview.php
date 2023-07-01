<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$state = $_POST['state'];
$id = $_POST['id'];


if ($state == "ok") {
    // some action goes here under php
    include "dbConnect.php";

    $query = $conn->query("UPDATE review SET verifState = 1 WHERE id = $id");

    // Fermer la connexion à la base de données
    $conn->close();

}



if ($state == "delete") {
    // some action goes here under php
    include "dbConnect.php";

    $query = "DELETE FROM `review` WHERE `id`= $id; ";
    $result = $conn->query($query);

    // Fermer la connexion à la base de données
    $conn->close();

}