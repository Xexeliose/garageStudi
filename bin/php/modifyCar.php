<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$functionname = $_POST['functionname'];
$id = $_POST['id'];


if ($functionname == "delete") {
    // some action goes here under php
    include "dbConnect.php";
    $query = $conn->query("SELECT images FROM cars WHERE (id=$id) ");
    $oldImg = $query->fetch_assoc();
    unlink($oldImg['images']);

    $query = "DELETE FROM `cars` WHERE `id`= $id;";
    $result = $conn->query($query);


    // Fermer la connexion à la base de données
    $conn->close();

}

if ($functionname == "modify") {
    // some action goes here under php
    include "dbConnect.php";

    $query = $conn->query("SELECT * FROM cars WHERE (id=$id) ");
    $car = $query->fetch_assoc();

    echo '
   
    <div id="modifyModal" class="modal" >
        <div class="modal-content">
          <span class="close" id="closeModModal">&times;</span>
          <h2>Modifier de véhicule</h2>
          <form action="php/modify-car.php" class="d-flex flex-column" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="brand">Marque</label>
              <input type="text" name="brand" id="brand" class="form-control" required value=' . $car['brand'] . '>
            </div>
            <div class="form-group">

              <label for="model">Modèle</label>
              <input type="text" name="model" id="model" class="form-control" required value=' . $car['model'] . '>
              <div class="form-group">
              </div>
              <label for="year">Année</label>
              <input type="number" name="year" id="year" class="form-control" required value=' . $car['years'] . '>
              <div class="form-group">
              </div>
              <label for="motor">Type de moteur</label>


              <select multiple class="form-control" id="motor" name="motor" required value=' . $car['motor'] . '>
                <option ' . (($car['motor'] == 'Essence') ? 'selected' : '') . '>Essence</option>
                <option ' . (($car['motor'] == 'Diesel') ? 'selected' : '') . '>Diesel</option>
                <option ' . (($car['motor'] == 'Electrique') ? 'selected' : '') . '>Electrique</option>
                <option ' . (($car['motor'] == 'Hybride') ? 'selected' : '') . '>Hybride</option>
                <option ' . (($car['motor'] == 'Hydrogène') ? 'selected' : '') . '>Hydrogène</option>
              </select>


              <div class="form-group">
              </div>
              <label for="km">Kilométrage</label>
              <input type="number" name="km" id="km" class="form-control" required value=' . $car['km'] . '>
              <div class="form-group">
              </div>
              <div class="form-group">
                <label for="price">Prix</label>
                <input type="number" name="price" id="price" class="form-control" required value=' . $car['price'] . '>
              </div>
              <div class="form-group">
                <label for="exampleFormControlFile1">Images</label>
                <input type="file" name="images" id="images" accept=".png, .jpeg, .jpg" >
              </div>
              <input type="hidden" name="id" id="id" value=' . $car['id'] . '>
              <button type="submit" class="btn btn-primary">Valider</button>
          </form>
        </div>
      </div>
    </div>
    <script> 
        var modifyModal = document.getElementById("modifyModal");
        var closeModModal = document.getElementById("closeModModal");

        modifyModal.style.display = "block";
        
        closeModModal.addEventListener("click", function () {
          modifyModal.style.display = "block";
        
        });
        window.addEventListener("click", function (event) {
          if (event.target === modifyModal) {
            modifyModal.style.display = "none";
          }
        });
    </script>
    ';
    


    // Fermer la connexion à la base de données
    $conn->close();

}

?>