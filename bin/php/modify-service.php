<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include "dbConnect.php";

$name = $_REQUEST['name'];
$id = $_REQUEST['id'];


// Fetch column names from a table
if (isset($_FILES['images']) && !empty($_FILES['images']['name'])) {
    $query = $conn->query("SELECT images FROM services WHERE (id=$id) ");
    $oldImg = $query->fetch_assoc();
    unlink($oldImg['images']);

    print_r($_FILES['images']);
    $temporaryPath = $_FILES['images']['tmp_name'];
    $filename = uniqid() . '.png'; // Génère un nom de fichier unique avec l'extension .png

    $destinationPath = '../../bin/img/services/' . $filename;
    move_uploaded_file($temporaryPath, $destinationPath);
    echo "L'image a été téléchargée avec succès.";
    $sqlQuery = "UPDATE services SET name = '$name', images = '$destinationPath' WHERE id = $id";

} else {
    $sqlQuery = "UPDATE services SET name = '$name' WHERE id = $id";
}

if (mysqli_query($conn, $sqlQuery)) {
    echo "<h3>data inserted in a database successfully."
        . " Please browse your localhost php my admin"
        . " to view the updated data</h3>";

    echo nl2br("\n$name");
} else {
    echo "ERROR: Hush! Sorry $sqlQuery. "
        . mysqli_error($conn);
}
$conn->close();

header("Location:../services.php");


// Fermer la connexion à la base de données

?>