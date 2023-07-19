<?php
$pageTitle = "Services";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        <?php echo isset($pageTitle) ? $pageTitle : "Services"; ?>
    </title>
    <!-- Bootsrap CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- My CSS-->
    <link rel="stylesheet" href="bin/css/template.css">
    <link rel="stylesheet" href="bin/css/services.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
</head>

<body>
    <header class="text-center">
        <img src="bin/img/logo.png" alt="logo">
        <h1>Garage V.Parrot</h1>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark border">
            <div id="current-page" class="navbar-brand m-auto pl-5"> '.$pageTitle.'</div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li></li>
                    <li class="nav-item ">
                        <a class="nav-link" href="bin/services.php">Nos Services<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="border"></li>
                    <li class="nav-item ">
                        <a class="nav-link" href="bin/cars.php">Voitures doccasion</a>
                    </li>
                    <li class="border"></li>
                    <li class="nav-item ">
                        <a class="nav-link" href="bin/contact.php">Nous contacter</a>
                    </li>
                    <li class="border"></li>
                </ul>
                <div class="dropdown">
                    <a class="nav-link " href="#" id="navbarDropdown" data-toggle="dropdown">
                        <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem"
                            class="bi bi-person-circle change-color" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            <path fill-rule="evenodd"
                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                        </svg>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"
                        style="min-width:200px;">
                        
                        <?php
                        include "bin/php/session.php";
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="user-menu bg-dark text-light row row-cols-1 row-cols-lg-3 employe adminAlign">
            <div class="col employe">
                <a href="bin/moderation.php">Modération des avis</a>
            </div>
            <div class=" col border-left admin adminAlign">
                <a href="bin/horaire.php">Modifier les horaires</a>
            </div>
            <div class=" col border-left admin adminAlign">
                <a href="bin/userManagement.php">Gestion Comptes</a>
            </div>
        </div>
    </header>';


    <main class="my-2 ">
        <div id="myModal" class="modal">
            <div class="modal-content">
                <span class="close" id="closeAdd">&times;</span>
                <h2>Ajout de service</h2>
                <form action="bin/php/addService.php" class="d-flex flex-column" method="post"
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
                    include "bin/php/fetchServices.php";
                    ?>
                </div>
            </div>
        </div>

        <div class="avis">
            <div class="d-flex justify-content-around align-items-end">
                <h2 class="text-center">Vos avis:</h2>
                <a href="bin/avis.php" class="text-center" style=" color: darkgray; font-style: italic;">Donner le
                    votre!</a>
            </div>
            <div class="all-avis">
                <?php
                include("bin/php/getGoodReviews.php");
                ?>
            </div>
        </div>

    </main>

    <?php
    include "bin/footer.php";
    ?>

    <!-- Bootsrap JS-->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="css/jquery.range.css">
    <script src="bin/js/services.js"></script>
    <script src="bin/js/avis.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>