<?php
$pageTitle = "Services";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,f initial-scale=1, shrink-to-fit=no">
  <title><?php echo isset($pageTitle) ? $pageTitle : "Services"; ?></title>
    <!-- Bootsrap CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- My CSS-->
    <link rel="stylesheet" href="bin/css/template.css">
    <link rel="stylesheet" href="bin/css/services.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
</head>

<body>
    <?php
    include "header.php";
    ?>


    <main class="my-2 ">
        <div id="myModal" class="modal">
            <div class="modal-content">
                <span class="close" id="closeAdd">&times;</span>
                <h2>Ajout de service</h2>
                <form action="php/addService.php" class="d-flex flex-column" method="post"
                    enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="brand">Nom</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Images</label>
                        <input type="file" name="images" id="images" accept=".png, .jpeg, .jpg" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Valider</button>

                </form>
            </div>
        </div>
        <div id="modModal"></div>

        <div class="m-auto row">
            <div class="head">
                <h2>Nos Services:</h2>
                <div class="admin adminAlign m-5 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="4rem" height="4rem" fill="green" id="openModal"
                        class="bi bi-plus-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                        <path
                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                    </svg>
                </div>
            </div>
            <div class="container ">
                <div class="row" id="service-wrapper">
                    <?php
                    include "php/fetchServices.php";
                    ?>
                </div>
            </div>
        </div>

        <div class="avis">
            <div class="d-flex justify-content-around align-items-end">
                <h2 class="text-center">Vos avis:</h2>
                <a href="avis.php" class="text-center" style=" color: darkgray; font-style: italic;">Donner le
                    votre!</a>
            </div>
            <div class="all-avis">
                <?php
                include("php/getGoodReviews.php");
                ?>
            </div>
        </div>

    </main>
    
    <?php
    include "footer.php";
    ?>

    <!-- Bootsrap JS-->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="bin/css/jquery.range.css">
    <script src="js/services.js"></script>
    <script src="js/avis.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>