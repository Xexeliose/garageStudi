<?php
$pageTitle = "Avis";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php echo isset($pageTitle) ? $pageTitle : "Avis"; ?></title>
  <!-- Bootsrap CSS-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- My CSS-->
  <link rel="stylesheet" href="css/template.css">
  <link rel="stylesheet" href="css/avis.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
</head>

<body>
  <?php
  include "header.php";
  ?>


  <main class="my-3 text-center d-flex justify-content-center">

<div class="d-flex justify-content-center">
  
  <div id="myModal" class="modal">
    <div class="modal-content" id="submitModal">
      <div id="modalMessage"></div>
    </div>
  </div>
  
</div>



    <div id="reviewForm">
      <h2>Donnez votre avis :</h2>
      <form id="reviewSubmitForm" action="php/submitReview.php" method="POST">
        <label for="name">Nom :</label>
        <input class="form-control" type="text" id="name" name="name" required><br><br>
        <label for="comment">Commentaire (maximum 400 caractères) :</label><br>
        <textarea class="form-control" id="comment" name="comment" rows="5" cols="50" maxlength="400"
          required></textarea><br><br>
        <label for="rating">Note :</label><br>

        <div class="rating">
          <span><input type="radio" name="rating" value="1" required></span>
          <span><input type="radio" name="rating" value="2"></span>
          <span><input type="radio" name="rating" value="3"></span>
          <span><input type="radio" name="rating" value="4"></span>
          <span><input type="radio" name="rating" value="5"></span>
        </div>

        <input type="submit" value="Soumettre" class="btn btn-dark">
      </form>
    </div>

  </main>

  <?php
  include "footer.php";
  ?>

  <!-- Bootsrap JS-->
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <link rel="stylesheet" href="css/jquery.range.css">
  <script src="js/avis.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
</body>

</html>