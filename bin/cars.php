<?php
$pageTitle = "Occasions";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo isset($pageTitle) ? $pageTitle : "Occasions"; ?></title>


  <!-- Bootsrap CSS-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- My CSS-->
  <link rel="stylesheet" href="css/template.css">
  <link rel="stylesheet" href="css/contact.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
</head>

<body>
  <?php
  include "header.php";
  ?>
  <main class="my-5 container-fluid">

    <!-- Modal notification-->
    <div id="notifModal" class="modal">
      <div class="modal-content" id="submitModal">
        <div id="modalMessage"></div>
      </div>
    </div>

    <div id="topWrapper">
      <!-- Modal Add Car-->
      <div class="mb-4 employe">
        <div class="text-center">
          <button id="openModal" class="btn btn-primary mb-4">Ajouter Véhicule</button>
        </div>
        <!-- Modal -->
        <div id="myModal" class="modal">
          <div class="modal-content">
            <span class="close" id="closeAdd">&times;</span>
            <h2>Ajout de véhicule</h2>
            <form action="php/addCar.php" class="d-flex flex-column" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="brand">Marque</label>
                <input type="text" name="brand" id="brand" class="form-control" required>
              </div>
              <div class="form-group">

                <label for="model">Modèle</label>
                <input type="text" name="model" id="model" class="form-control" required>
                <div class="form-group">
                </div>
                <label for="year">Année</label>
                <input type="number" name="year" id="year" class="form-control" required>
                <div class="form-group">
                </div>
                <label for="motor">Type de moteur</label>
                <select multiple class="form-control" id="motor" name="motor" required>
                  <option>Essence</option>
                  <option>Diesel</option>
                  <option>Electrique</option>
                  <option>Hybride</option>
                  <option>Hydrogène</option>
                </select>
                <div class="form-group">
                </div>
                <label for="km">Kilométrage</label>
                <input type="number" name="km" id="km" class="form-control" required>
                <div class="form-group">
                </div>
                <div class="form-group">
                  <label for="price">Prix</label>
                  <input type="number" name="price" id="price" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="detail">Description</label>
                  <textarea class="form-control" id="detail" name="detail" rows="5" required></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlFile1">Images</label>
                  <input type="file" name="images" id="images" accept=".png, .jpeg, .jpg" required>
                </div>
                <button type="submit" class="btn btn-primary">Valider</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div id="modModal"></div>

      <!-- Range Sliders-->
      <div class="search-panel row row-cols-xl-3">
        <div class="mb-5 d-flex flex-column col align-items-center">
          <p><input type="hidden" id="price_range" class="slider"></p>
          <button class="btn btn-dark reset" onclick="resetPrice()">Reset</button>
        </div>
        <div class="mb-5 d-flex flex-column col align-items-center">
          <p><input type="hidden" id="km_range" class="slider"></p>
          <button class="btn btn-dark reset" onclick="resetKm()">Reset</button>
        </div>
        <div class="mb-5 d-flex flex-column col align-items-center">
          <p><input type="hidden" id="year_range" class="slider"></p>
          <button class="btn btn-dark reset" onclick="resetYear()">Reset</button>
        </div>
      </div>
    </div>
    <!-- Cars -->
    <div class="cars row row-cols-lg-3" id="cars-container">
      <?php
      include "php/fetchCars.php";
      ?>
    </div>

    <!-- Car Detail -->

    <div class=" justify-content-center flex-column align-items-center" id="detail-container">

    </div>

  </main>

  <?php
  include "footer.php";
  ?>




  <!-- Bootsrap JS-->

  <link rel="stylesheet" href="css/jquery.range.css">
  <script src="js/jquery.range.js"></script>
  <script src="js/cars.js"></script>
  <script src="js/rangeslider.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
</body>

</html>