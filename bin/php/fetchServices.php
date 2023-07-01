<?php
  // Include database configuration file 
  include "dbConnect.php";

  // Set conditions for filter by price range 


  // Fetch matched records from database 
  $query = $conn->query("SELECT * FROM services ");

  if ($query->num_rows > 0) {
    while ($services = $query->fetch_assoc()) {
      echo '
      <div class="col-md-4 article">
        <div class="rounded-article" style="background-image: url(' . $services['images'] . '); ">
          <div class="semi-circle d-flex flex-column justify-content-end">
              <div class="admin reverse">
                <button class="d-inline-block btn" onclick="modifyService(' . $services['id'] . ')">modifier</p>
                <button class="d-inline-block btn" onclick="deleteService(' . $services['id'] . ')">supprimer</p>
              </div>
              <h3 class="reverse">' . $services['name'] . '</h3>
          </div>
        </div>
      </div>      
        ';
    }
  } else {
    echo '<p>Service(s) not found...</p>';
  }
  $conn->close();

?>