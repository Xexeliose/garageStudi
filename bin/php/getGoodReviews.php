<?php

include "dbConnect.php";


// Récupérer les avis existants et les renvoyer
$getReviewsQuery = "SELECT * FROM review WHERE (verifState=1) ORDER BY RAND() LIMIT 10";
$result = $conn->query($getReviewsQuery);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '
        <article class="un-avis">
            <p>' . $row['name'] . '</p>
            <p class="text-avis mt-2">' . $row['comment'] . '</p>
            <p>' ;
            for ($i = 1; $i <= 5; $i++) {
                if ($i <= $row['rating']) {
                    echo '★'; // Étoile pleine
                } else {
                    echo '☆'; // Étoile vide
                }
            }
            echo '</p>
        </article>';
    }
} else {
    echo "Aucun avis pour le moment.";
}

$conn->close();
?>