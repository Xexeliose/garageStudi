<?php
$pageTitle = "Services";
session_start();

echo '<style>.admin { display: none; }</style>';
if (isset($_SESSION['user_login'])) {


    if ($_SESSION['user_login'] == 'Vincent.Parrot@exemple.com') {
        echo '<style>
      .admin { display: flex; }
      .adminAlign{justify-content:center;}
    </style>';
    }
    echo '<style>.employe { display: flex; justify-content:center; border-right: none;}
  #adminmenu employe{justify-content:center;}
  </style>';
} else {
    echo '<style>
    .employe { display: none; }
    </style>';
}
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
                        <a class="nav-link" href="bin/services.php">Nos Services<span
                                class="sr-only">(current)</span></a>
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
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include "php/dbConnect.php";


$query = $conn->query("SELECT horaire FROM horaires");
$result = $query->fetch_all();

$formattedHoraires = array();
foreach ($result as $row) {
    $horaire = $row[0];

    // Supprimer le premier "0" s'il est présent
    if ($horaire[0] === '0') {
        $horaire = substr($horaire, 1);
    }

    // Supprimer les zéros à la fin si l'heure est un multiple de 10
    if (substr($horaire, -2) === '00') {
        $horaire = rtrim($horaire, '0');
    }

    // Remplacer ":" par "h"
    $horaire = str_replace(':', 'h', $horaire);

    $formattedHoraires[] = $horaire;
}

// Séparer les horaires en groupes de 4
$groupsOfTwo = array_chunk($formattedHoraires, 2);

$formattedGroups = array();
foreach ($groupsOfTwo as $group) {
    // Fusionner les horaires du groupe avec le séparateur "-"
    $formattedGroup = implode(' - ', $group);
    if ($formattedGroup === "0h00h - 0h00h") {
      $formattedGroup = "fermé";
    }
    $formattedGroups[] = $formattedGroup;
}


$conn->close();

echo '
<footer class="card-footer bg-dark text-light row pt-4 pr-5">
<ul id="info" class="list-unstyled ml-3 col-md text-center mt-4">
  <li>
    <a href="#" class="text-decoration-none ">Nous contacter</a>
    <p>06 XX XX XX XX</p>
  </li>
</ul>

<ul id="reseaux" class="list-unstyled col-md text-center mt-2">
  <img src="img/logo.png" class="bg-white d-block m-auto" alt="logo">
  <li class=" mt-4 d-inline-block"><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem"
        fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
        <path
          d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
      </svg></a></li>
  <li class="ml-5 d-inline-block"><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem"
        fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
        <path
          d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
      </svg></a></li>
  <li class="ml-5 d-inline-block"><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem"
        fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
        <path
          d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
      </svg></a></li>
</ul>

<ul id="horaires" class="list-unstyled col-md">
  <li>
    <p class="d-inline">Nos horaires:</p>
  </li>
  <li class="">Lundi: <p id="lundi" class="d-inline"> '.$formattedGroups[0].' | '.$formattedGroups[1].'</p>
  </li>
  <li>Mardi: <p id="mardi" class="d-inline">  '.$formattedGroups[2].' | '.$formattedGroups[3].' </p>
  </li>
  <li>Mercredi: <p id="mercredi" class="d-inline"> '.$formattedGroups[4].' | '.$formattedGroups[5].'</p>
  </li>
  <li>Jeudi: <p id="jeudi" class="d-inline">  '.$formattedGroups[6].' | '.$formattedGroups[7].' </p>
  </li>
  <li i>Vendredi: <p d="vendredi" class="d-inline"> '.$formattedGroups[8].' | '.$formattedGroups[9].' </p>
  </li>
  <li>Samedi: <p id="samedi" class="d-inline">  '.$formattedGroups[10].' | '.$formattedGroups[11].'</p>
  </li>
  <li>Dimanche: <p id="dimanche" class="d-inline">  '.$formattedGroups[12].' | '.$formattedGroups[13].' </p>
  </li>
</ul>



</footer>';

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