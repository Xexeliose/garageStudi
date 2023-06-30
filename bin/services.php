<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Document</title>
    <!-- Bootsrap CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- My CSS-->
    <link rel="stylesheet" href="css/template.css">
    <link rel="stylesheet" href="css/services.css">
</head>

<body>
    <?php
    include "header.php";
    ?>


    <main class="my-2 ">


        <div class="m-auto row">
            <div class="head">

                <h2>Nos Services:</h2>
                <div class="admin m-5 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="4rem" height="4rem" fill="green"
                        class="bi bi-plus-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                        <path
                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                    </svg>
                </div>
            </div>
            <div class="container ">
                <div class="row">
                    <div class="col-md-4 article">
                        <div class="rounded-article">
                            <div class="semi-circle d-flex flex-column justify-content-end">
                                <div class="admin reverse">
                                    <p class="d-inline-block">modifier</p>
                                    <p class="d-inline-block">supprimer</p>
                                </div>
                                <h3 class="reverse">Nom</h3>
                                <div class="reverse ">

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 article">
                        <div class="rounded-article">
                            <div class="semi-circle d-flex flex-column justify-content-end">
                                <div class="admin reverse">
                                    <p class="d-inline-block">modifier</p>
                                    <p class="d-inline-block">supprimer</p>
                                </div>
                                <h3 class="reverse">Nom</h3>
                                <div class="reverse ">

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 article">
                        <div class="rounded-article">
                            <div class="semi-circle d-flex flex-column justify-content-end">
                                <div class="admin reverse">
                                    <p class="d-inline-block">modifier</p>
                                    <p class="d-inline-block">supprimer</p>
                                </div>
                                <h3 class="reverse">Nom</h3>
                                <div class="reverse ">

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="avis">
            <div class="d-flex justify-content-around align-items-end">
                <h2 class="text-center">Vos avis:</h2>
                <p class="text-center" style=" color: darkgray; font-style: italic;">Donner le votre!</p>
            </div>
            <div class="all-avis">
                <article class="un-avis">
                    <p>nom prenom</p>
                    <p style="font-size: 0.8rem;">date</p>
                    <p class="text-avis">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat corrupti alias
                        neque, eum magnam odit quam maxime molestiae unde, dolorem hic officia harum esse.</p>
                </article>
                <article class="un-avis">
                    <p>nom prenom</p>
                    <p style="font-size: 0.8rem;">date</p>
                    <p class="text-avis">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat corrupti alias
                        neque, eum magnam odit quam maxime molestiae unde, dolorem hic officia harum esse.</p>
                </article>
                <article class="un-avis">
                    <p>nom prenom</p>
                    <p style="font-size: 0.8rem;">date</p>
                    <p class="text-avis">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat corrupti alias
                        neque, eum magnam odit quam maxime molestiae unde, dolorem hic officia harum esse.</p>
                </article>
                <article class="un-avis">
                    <p>nom prenom</p>
                    <p style="font-size: 0.8rem;">date</p>
                    <p class="text-avis">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat corrupti alias
                        neque, eum magnam odit quam maxime molestiae unde, dolorem hic officia harum esse.</p>
                </article>
                <article class="un-avis">
                    <p>nom prenom</p>
                    <p style="font-size: 0.8rem;">date</p>
                    <p class="text-avis">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat corrupti alias
                        neque, eum magnam odit quam maxime molestiae unde, dolorem hic officia harum esse.</p>
                </article>
                <article class="un-avis">
                    <p>nom prenom</p>
                    <p style="font-size: 0.8rem;">date</p>
                    <p class="text-avis">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat corrupti alias
                        neque, eum magnam odit quam maxime molestiae unde, dolorem hic officia harum esse.</p>
                </article>
            </div>
        </div>

    </main>

    <?php
    include "footer.php";
    ?>

    <!-- Bootsrap JS-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>