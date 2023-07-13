<?php
 session_start();
if (isset($_SESSION['user_login'])) {

    include "dbConnect.php";

    $brand = $_REQUEST['brand'];
    $model = $_REQUEST['model'];
    $year = $_REQUEST['year'];
    $motor = $_REQUEST['motor'];
    $km = $_REQUEST['km'];
    $price = $_REQUEST['price'];
    $id = $_REQUEST['id'];
    $detail = $_REQUEST['detail'];


    // Fetch column names from a table
    if (isset($_FILES['images']) && !empty($_FILES['images']['name'])) {
        $query = $conn->query("SELECT images FROM cars WHERE (id=$id) ");
        $oldImg = $query->fetch_assoc();
        unlink($oldImg['images']);

        print_r($_FILES['images']);
        $temporaryPath = $_FILES['images']['tmp_name'];
        $filename = uniqid() . '.png'; // Génère un nom de fichier unique avec l'extension .png

        $destinationPath = '../../bin/img/cars/' . $filename;
        move_uploaded_file($temporaryPath, $destinationPath);
        echo "L'image a été téléchargée avec succès.";
        $sqlQuery = "UPDATE cars SET brand = '$brand', model = '$model', years = '$year', motor = '$motor', km = '$km', price = '$price', images = '$destinationPath', detail = '$detail' WHERE id = $id";

    } else {
        $sqlQuery = "UPDATE cars SET brand = '$brand', model = '$model', years = '$year', motor = '$motor', km = '$km', price = '$price', detail = '$detail' WHERE id = $id";
    }

    if (mysqli_query($conn, $sqlQuery)) {
        echo "<h3>data inserted in a database successfully."
            . " Please browse your localhost php my admin"
            . " to view the updated data</h3>";

        echo nl2br("\n$brand\n $model\n "
            . "$year\n $motor\n $km\n $price");
    } else {
        echo "ERROR: Hush! Sorry $sqlQuery. "
            . mysqli_error($conn);
    }
    $conn->close();

    header("Location:../cars.php");


    // Fermer la connexion à la base de données
//header("Location:../cars.php");
}
?>