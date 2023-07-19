<?php


include "dbConnect.php";

// Vérification du formulaire de connexion
if (isset($_POST['login']) && isset($_POST['password'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    // Requête SQL pour vérifier les informations de connexion
    $query = "SELECT * FROM `users` WHERE `login` = ? AND `password` = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('ss', $login, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    // Vérification des résultats
    $user = $result->fetch_assoc();
    if ($user) {
        // Démarrer la session
        session_start();

        // Stocker les informations de l'utilisateur dans la session
        $_SESSION['user_login'] = $user['login'];
    }
    header("Location:../services.php");
        exit();
}

$conn->close();
?>