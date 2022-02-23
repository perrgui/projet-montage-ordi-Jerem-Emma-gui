<!--on inclu les pages qui comporte le header + le css  -->
<?php

include_once 'includes/variables.php';
include_once 'includes/functions.php';

?>

<!--  button login  -->
<?php
if (isset($_POST['login']) && $_POST['password'] == $motDePasse && !empty($_POST['login'])) {
  $_SESSION['login'] = $_POST['login'];
  $_SESSION['password'] = $_POST['password'];
}
?>
<!-- Html commun à toutes les pages  -->
<!DOCTYPE html>
<html lang="fr">

<!-- Header -->
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="HeaderFooter/css/style.css" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Montage Ordinateur</title>
</head>

<body>
  <header>
  <div class='d-flex justify-cent'>
  <h1>je sais plus comment on s'appelle ..</h1>
   </div>
  <h3> C'EST BIENTOT LA PAUSE ! </h3>


  <!-- ****** NAV TEST (quand on avait pas le time)**** -->
    <!-- <nav class="navbar navbar-light bg-light justify-content-between"> -->
        <!-- <a class="navbar-brand" href="?page=concept">Concepteur</a> -->
        <!-- <a class="navbar-brand" href="?page=mont">Monteur</a> -->
        <!-- <a class="navbar-brand" href="?page=liste">Commandes</a> -->
        <!-- <a class="navbar-brand" href="?page=com">Salon de thé</a> -->

       
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 shadow-sm">
           
  <a href="#" class="navbar-brand font-weight-bold d-block d-lg-none">Boite à Outils</a>
  <button type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler">
          <span class="navbar-toggler-icon"></span>
      </button>

  <div id="navbarContent" class="collapse navbar-collapse">
    <ul class="navbar-nav mx-auto">
     


                      <!-- STOCK menu déroulant-->
                      <li class="nav-item dropdown boiteaoutils">
        <a id="boiteàoutils" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle font-weight-bold text-uppercase">Stock</a>
        <div aria-labelledby="boiteaoutils" class="dropdown-menu border-0 p-0 m-0">
          <div class="container">
            <div class="row bg-white rounded-0 m-0 shadow-sm">
              <div class="col-lg-7 col-xl-8">
                <div class="p-4">
                  <div class="row">
                    <div class="col-lg-6 mb-4">
                      <ul class="list-unstyled">
                        <li class="nav-item"><a href="" class="nav-link text-small pb-0">Liste </a></li>
                        <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Modifier</a></li>
                        <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Créer</a></li>
                      </ul>
</li>
                    </div>
                    


                    <!-- MODELES menu déroulant -->
                     <li class="nav-item dropdown boiteaoutils">
        <a id="boiteàoutils" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle font-weight-bold text-uppercase">Modèles</a>
        <div aria-labelledby="boiteaoutils" class="dropdown-menu border-0 p-0 m-0">
          <div class="container">
            <div class="row bg-white rounded-0 m-0 shadow-sm">
              <div class="col-lg-7 col-xl-8">
                <div class="p-4">
                  <div class="row">
                    <div class="col-lg-6 mb-4">
                    <div class="col-lg-6 mb-4">
                      <ul class="list-unstyled">
                        <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Catalogue</a></li>
                        <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Modifier un modèle</a></li>
                        <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Nouvelle conception</a></li>
                      </ul>
                    </div>





                    <!-- STATISTIQUE menue déroulant -->
                    <li class="nav-item dropdown boiteaoutils">
        <a id="boiteàoutils" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle font-weight-bold text-uppercase">Statistiques</a>
        <div aria-labelledby="boiteaoutils" class="dropdown-menu border-0 p-0 m-0">
          <div class="container">
            <div class="row bg-white rounded-0 m-0 shadow-sm">
              <div class="col-lg-7 col-xl-8">
                <div class="p-4">
                  <div class="row">
                    <div class="col-lg-6 mb-4">
                    <div class="col-lg-6 mb-4">
                      <h6 class="font-weight-bold text-uppercase">Machines</h6>
                      <ul class="list-unstyled">
                        <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Modèles montés</a></li>
                        <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Commentaires de montage</a></li>
                        <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Gestion de modèles</a></li>
                      </ul>
                    </div>

                    <!-- COMMANDES menue déroulant -->
                    <li class="nav-item dropdown boiteaoutils">
        <a id="boiteàoutils" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle font-weight-bold text-uppercase">Commandes</a>
        <div aria-labelledby="boiteaoutils" class="dropdown-menu border-0 p-0 m-0">
          <div class="container">
            <div class="row bg-white rounded-0 m-0 shadow-sm">
              <div class="col-lg-7 col-xl-8">
                <div class="p-4">
                  <div class="row">
                    <div class="col-lg-6 mb-4">
                    <div class="col-lg-6 mb-4">
                      <h6 class="font-weight-bold text-uppercase">A faire</h6>
                      <ul class="list-unstyled">
                        <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Nouveaux</a></li>
                        <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Hisotrique</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </li>
     
    </ul>
  </div>

        <?php if (isset($_SESSION['login'])) {
        ?><a class="navbar-brand" href="?page=logout">Déconnexion</a>


    <?php } ?>

        <?php
        if (isset($_SESSION['login']) && isset($_SESSION['password'])) {
        ?>
            <span class="navbar-brand"><?= $_SESSION['login']; ?></span>
        <?php } else {
        ?> <a class="navbar-brand" href="?page=login">Connexion</a>
        <?php
        }
        ?>
         
    </nav>
   
</header>
 <!-- <div class="column-left"></div> -->
    <div class="column">

    <?php
    if (!empty($_GET['disconnected']) && $_GET['disconnected'] == 1) {
      echo " <div class=\"alert alert-danger\" role=\"alert\">
                    Vous êtes déconnecté !
                </div>";
    }
    ?>
      
      </body>
  