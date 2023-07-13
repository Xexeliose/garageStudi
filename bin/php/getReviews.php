<?php
 session_start();
if (isset($_SESSION['user_login'])) {

include "dbConnect.php";


// Récupérer les avis existants et les renvoyer
$getReviewsQuery = "SELECT * FROM review WHERE (verifState=0) ORDER BY id DESC";
$result = $conn->query($getReviewsQuery);
if ($result->num_rows > 0) {
    while ($review = $result->fetch_assoc()) {
        echo '
        <article class="un-avis">
            <p>' . $review['name'] . '</p>
            <p class="text-avis mt-2">' . $review['comment'] . '</p>
            <p>';
        for ($i = 1; $i <= 5; $i++) {
            if ($i <= $review['rating']) {
                echo '★'; // Étoile pleine
            } else {
                echo '☆'; // Étoile vide
            }
        }
        echo '</p>
            <div class="button-container">
            <button class="btn btn-primary" onclick="okReview(' . $review['id'] . ')">Valider</p>
            <button class="btn btn-danger" onclick="deleteReview(' . $review['id'] . ')">Refuser</p>
            </div>
        </article>';
    }
} else {
    echo "Aucun avis pour le moment.";
}
}
$conn->close();
?>