<?php
if (isset($_POST['price_range'])) {

  // Include database configuration file 
  include "dbConnect.php";

  // Set conditions for filter by price range 
  $whereSQL = '';
  $priceRange = $_POST['price_range'];
  $kmRange = $_POST['km_range'];
  $yearRange = $_POST['year_range'];
  if (!empty($priceRange) && !empty($kmRange) && !empty($yearRange)) {
    $priceRangeArr = explode(',', $priceRange);
    $kmRangeArr = explode(',', $kmRange);
    $yearRangeArr = explode(',', $yearRange);
    $whereSQL = "WHERE price BETWEEN '" . $priceRangeArr[0] . "' AND '" . $priceRangeArr[1] . "'  
        AND km BETWEEN '" . $kmRangeArr[0] . "' AND '" . $kmRangeArr[1] . "' 
        AND years BETWEEN '" . $yearRangeArr[0] . "' AND '" . $yearRangeArr[1] . "' ";
    $orderSQL = " ORDER BY price ASC ";
  } else {
    $orderSQL = " ORDER BY created DESC ";
  }

  // Fetch matched records from database 
  $query = $conn->query("SELECT * FROM cars $whereSQL $orderSQL");

  if ($query->num_rows > 0) {
    while ($cars = $query->fetch_assoc()) {
      echo '
        <article class="col col-md-1 col-1 col-lg-2">
        <img src="' . $cars['images'] . '" alt="imgVoiture">
        <p class="price price-buble">' . $cars['price'] . ' €</p>
        <h3>' . $cars['brand'] . ' ' . $cars['model'] . '</h3>
        <div class="specs">
        <p>' . $cars['years'] . '</p>
        <p>' . $cars['motor'] . '</p>
        <p>' . $cars['km'] . ' km</p>
        </div>
        <div class="border" style="margin-top: -10px;"></div>
        <p class="price" id="price-tag">' . $cars['price'] . ' €</p>
        <div class="admin">
          <button class="btn modify-btn" onclick="modifyCar(' . $cars['id'] . ')">Modifier</button>
          <button class="btn delete-btn" onclick="deleteCar(' . $cars['id'] . ')">Suprimer</button>
        </div>
        <button class="btn btn-dark" id="detail">Détails</button>
        </article>
        ';
    }
  } else {
    echo '<p>Product(s) not found...</p>';
  }
  $conn->close();
}


?>