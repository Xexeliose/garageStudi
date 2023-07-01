<?php
ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
include "dbConnect.php";


// Récupérer les valeurs du formulaire d'avis
$name = $_POST['name'];
$comment = $_POST['comment'];
$rating = $_POST['rating'];

// Insertion de l'avis dans la table
$sql = "INSERT INTO review (name, comment, rating) VALUES ('$name', '$comment', '$rating')";

if ($conn->query($sql) === TRUE) {
    // Récupérer les avis existants et les renvoyer
    $getReviewsQuery = "SELECT * FROM review ORDER BY id DESC";
    $result = $conn->query($getReviewsQuery);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div><strong>Nom :</strong> " . $row['name'] . "<br>";
            echo "<strong>Commentaire :</strong> " . $row['comment'] . "<br>";
            echo "<strong>Note :</strong> " . $row['rating'] . "/5</div><hr>";
        }
    } else {
        echo "Aucun avis pour le moment.";
    }
} else {
    echo "Erreur lors de l'ajout de l'avis ";
}

$conn->close();

header("")
?>
