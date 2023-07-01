<?php
echo '
 <header class="text-center">
 <img src="img/logo.png" alt="logo">
 <h1>Garage V.Parrot</h1>
 <nav class="navbar navbar-expand-sm navbar-dark bg-dark border">
   <div id="current-page" class="navbar-brand m-auto pl-5">Current page</div>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
     aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>

   <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav">
       <li></li>
       <li class="nav-item ">
         <a class="nav-link" href="services.php">Nos Services<span class="sr-only">(current)</span></a>
       </li>
       <li class="border"></li>
       <li class="nav-item active">
         <a class="nav-link" href="cars.php">Voitures doccasion</a>
       </li>
       <li class="border"></li>
       <li class="nav-item ">
         <a class="nav-link" href="contact.php">Nous contacter</a>
       </li>
       <li class="border"></li>
     </ul>
     <div class="dropdown">
       <a class="nav-link " href="#" id="navbarDropdown" data-toggle="dropdown">
         <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" class="bi bi-person-circle change-color"
           viewBox="0 0 16 16">
           <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
           <path fill-rule="evenodd"
             d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
         </svg>
       </a>
       <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
         <div class="d-flex flex-column">
           <li class="align-self-center">
             <p id="user-display">Nom Prenom</p>
           </li>
           <li>
             <a class="dropdown-item" href="#">Action</a>
           </li>
           <li>
             <a class="dropdown-item" href="#">Another action</a>
           </li>
           <div class="dropdown-divider"></div>
           <li>
             <a class="dropdown-item" href="#" id="sign-out">Déconnexion</a>
           </li>
         </div>
       </ul>
     </div>
   </div>
 </nav>
 <div class="user-menu bg-dark text-light row row-cols-1 row-cols-lg-2  ">
   <div class=" col border-right border-bottom">
     <a href="moderation.php">Modération des avis</a>
   </div>
   <div class=" col border-bottom admin">
     <a href="horaire.php">Modifier les horaires</a>
   </div>
 </div>
</header>';
?>