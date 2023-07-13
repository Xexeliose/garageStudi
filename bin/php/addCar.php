<?php
 session_start();
if (isset($_SESSION['user_login'])) {
    include "dbConnect.php";


    // Fetch column names from a table
    if (isset($_FILES['images'])) {

        $temporaryPath = $_FILES['images']['tmp_name'];
        $filename = uniqid() . '.png'; // Génère un nom de fichier unique avec l'extension .png

        $destinationPath = '../../bin/img/cars/' . $filename;
        move_uploaded_file($temporaryPath, $destinationPath);
        echo "Les images ont été téléchargées avec succès.";


        $brand = $_REQUEST['brand'];
        $model = $_REQUEST['model'];
        $year = $_REQUEST['year'];
        $motor = $_REQUEST['motor'];
        $km = $_REQUEST['km'];
        $price = $_REQUEST['price'];
        $detail = $_REQUEST['detail'];


        $sqlQuery = "INSERT INTO cars (brand, model, years, motor, km, price, images, detail) VALUES ('$brand', '$model','$year','$motor','$km','$price', '$destinationPath', '$detail')";
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
        header("Location:../cars.php");
    } else {
        echo "Une erreur s'est produite lors du téléchargement du fichier.";
    }
    $conn->close();
    // Fermer la connexion à la base de données
}

?>