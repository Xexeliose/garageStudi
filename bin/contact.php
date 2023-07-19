<?php
$pageTitle = "Contact";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <title><?php echo isset($pageTitle) ? $pageTitle : "Contact"; ?></title>

    <!-- Bootsrap CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- My CSS-->
    <link rel="stylesheet" href="bin/css/template.css">
    <link rel="stylesheet" href="bin/css/contact.css">

</head>

<body>
    <?php
    include "header.php";
    ?>
    <main class="m-3">

        <!-- Modal notification-->
        <div id="notifModal" class="modal">
            <div class="modal-content" id="submitModal">
                <div id="modalMessage"></div>
            </div>
        </div>

        <div class="container">
            <h2>Téléphonez-nous:</h2>
            <p style="font-size: larger;">06 XX XX XX XX</p>
            <h2>Formulaire de contact</h2>
            <form id="contact-form">

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
                    <input type="text" class="form-control" id="sujet" name="sujet" required>
                </div>

                <div class="form-group">
                    <label for="message">Message :</label>
                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Envoyer</button>

            </form>
        </div>



    </main>

    <?php
    include "footer.php";
    ?>


    <!-- Bootsrap JS-->
    <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="js/contact.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>