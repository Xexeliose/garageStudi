<?php
session_start();
if (isset($_SESSION['user_login'])) {

    include "dbConnect.php";

    //check for image file
    if (isset($_FILES['images'])) {

        //generate file name / destination
        $temporaryPath = $_FILES['images']['tmp_name'];
        $filename = uniqid() . '.png';

        $destinationPath = '../../bin/img/services/' . $filename;
        move_uploaded_file($temporaryPath, $destinationPath);
        echo "Les images ont été téléchargées avec succès.";


        $name = $_REQUEST['name'];



        $sqlQuery = "INSERT INTO services (name, images) VALUES ('$name', '$destinationPath')";
        if (mysqli_query($conn, $sqlQuery)) {
            echo "<h3>data inserted in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";

            echo nl2br("\n$name");
        } else {
            echo "ERROR: Hush! Sorry $sqlQuery. "
                . mysqli_error($conn);
        }
        header("Location:../services.php");
    } else {
        echo "Une erreur s'est produite lors du téléchargement du fichier.";
    }
    $conn->close();
}
?>