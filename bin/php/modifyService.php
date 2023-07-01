<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$functionname = $_POST['functionname'];
$id = $_POST['id'];


if ($functionname == "delete") {
    // some action goes here under php
    include "dbConnect.php";
    $query = $conn->query("SELECT images FROM services WHERE (id=$id) ");
    $oldImg = $query->fetch_assoc();
    unlink($oldImg['images']);
    // Fetch column names from a table
    $query = "DELETE FROM `services` WHERE `id`= $id;";
    $result = $conn->query($query);


    // Fermer la connexion à la base de données
    $conn->close();


}

if ($functionname == "modify") {
    // some action goes here under php
    include "dbConnect.php";
    // Fetch column names from a table

    $query = $conn->query("SELECT * FROM services WHERE (id=$id) ");
    $services = $query->fetch_assoc();

    echo '
    <div id="modifyModal" class="modal">
    <div class="modal-content">
        <span class="close" id="closeModModal">&times;</span>
        <h2>Modifier le service</h2>
        <form action="php/modify-service.php" class="d-flex flex-column" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="brand">Nom</label>
                <input type="text" name="name" id="name" class="form-control" required value="' . $services['name'] . '">
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Images</label>
                <input type="file" name="images" id="images" accept=".png, .jpeg, .jpg" >
            </div>
            <input type="hidden" name="id" id="id" value="' . $services['id'] . '">
            <button type="submit" class="btn btn-primary">Valider</button>

        </form>
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