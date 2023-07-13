<?php
        session_start();

    // Bouton de déconnexion cliqué
        // Supprimer toutes les variables de session
        session_unset();

        // Détruire la session
        session_destroy();

        // Redirection vers la page de connexion ou autre page de votre choix
        header("Location:../services.php");

        exit();
    

?>



