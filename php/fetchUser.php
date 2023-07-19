<?php
 session_start();
if (isset($_SESSION['user_login'])) {

    // Include database configuration file 
    include "dbConnect.php";

    // Set conditions for filter by price range 


    // Fetch matched records from database 
    $query = $conn->query("SELECT * FROM `users` WHERE `type`= 'Employe'");

    if ($query->num_rows > 0) {
        while ($users = $query->fetch_assoc()) {
            echo '
    <div>
    <p>' . $users['login'] . '</p>
    <button class="btn btn-dark" onclick="delUser(\'' . $users['login'] . '\')">Supprimer</button>
    </div>      
       ';
        }
    } else {
        echo '<p>Employé(s) not found...</p>';
    }
    $conn->close();
}
?>