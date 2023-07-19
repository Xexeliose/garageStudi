<?php

session_start();

echo '<div class="d-flex flex-column"  style="padding:10px;">';

// Vérifier si la session est déjà démarrée
if (isset($_SESSION['user_login'])) {
    $userLogin = $_SESSION['user_login'];
    echo "Connecté en tant que : $userLogin";
    echo '<form method="POST" action="php/disconnect.php">
    <button type="submit" class="btn btn-dark">Deconnexion</button>
    </form>';
} else {
    echo '
        <h2>Connexion</h2>
        <form method="POST" action="php/login.php" class="form-group"">
            <label for="login">Identifiant :</label>
            <input type="text" name="login" id="login" class="form-control" required><br>

            <label for="password">Mot de passe :</label>
            <input type="password" name="password" id="password" class="form-control" required><br>

            <input type="submit" class="btn btn-dark" value="Se connecter">
        </form>
    </div>';
}

?>