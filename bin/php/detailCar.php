<?php


include "dbConnect.php";

$id = $_POST['id'];

//Sql to get the car
$query = $conn->query("SELECT * FROM cars WHERE id=$id");
$cars = $query->fetch_assoc();


echo '
<link rel="stylesheet" href="bin/css/detailCar.css">
<button id="retour" class="btn btn-dark" onclick="filterCars()"> Retour </button>
<img src="https://picsum.photos/600/300" alt="carImgé">
<p>' . $cars['detail'] . '</p>
<table>
    <thead>
        <tr>
            <th colspan="2">Caractéristiques</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="carac">Marque:</td>
            <td>' . $cars['brand'] . '</td>
        </tr>
        <tr>
            <td class="carac">Modéle:</td>
            <td>' . $cars['model'] . '</td>
        </tr>
        <tr>
            <td class="carac">Année de fabrication:</td>
            <td>' . $cars['years'] . '</td>
        </tr>
        <tr>
            <td class="carac">Kilométre compteur</td>
            <td>' . $cars['km'] . ' km</td>
        </tr>
        <tr>
            <td class="carac">Prix:</td>
            <td>' . $cars['price'] . ' €</td>
        </tr>
    </tbody>
</table>

<h2 class="mt-3">Formulaire de contact</h2>
<form id="contact-form" onsubmit="return false">

    <div class="form-group">
        <label for="nom">Nom :</label>
        <input type="text" class="form-control" id="nom" name="nom" required>
    </div>

    <div class="form-group">
        <label for="prenom">Prénom :</label>
        <input type="text" class="form-control" id="prenom" name="prenom" required>
    </div>

    <div class="form-group">
        <label for="email">Adresse email :</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>

    <div class="form-group">
        <label for="telephone">Numéro de téléphone :</label>
        <input type="tel" class="form-control" id="telephone" name="telephone" required>
    </div>

    <div class="form-group">
        <label for="sujet">Sujet :</label>
        <input type="text" class="form-control" id="sujet" name="sujet" disabled value="' . $cars['brand'] . ' ' . $cars['model'] . ' required">
    </div>

    <div class="form-group">
        <label for="message">Message :</label>
        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
    </div>

    <button type="submit" class="btn btn-primary mt-3">Envoyer</button>

</form>

<script src="js/contact.js"></script>

';


$conn->close();

?>