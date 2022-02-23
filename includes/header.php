<!--on inclu les pages qui comporte le header + le css  -->
<?php
include_once 'variables.php';
include_once 'functions.php';
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

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Montage Ordinateur</title>
</head>

<body>
  <nav class="navbar navbar-light bg-light justify-content-between">
    <a class="navbar-brand" href="?page=concept">concepteur</a>
    <a class="navbar-brand" href="?page=mont">monteur</a>
    <a class="navbar-brand" href="?page=liste">Listemachine</a>
    <a class="navbar-brand" href="?page=com">commentaire</a>
    <?php if (isset($_SESSION['login'])) {
    ?><a class="navbar-brand" href="?page=logout">Deconnexion</a>

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
  <!-- <div class="column-left"></div> -->
  <div class="column">
    <?php
    if (!empty($_GET['disconnected']) && $_GET['disconnected'] == 1) {
      echo " <div class=\"alert alert-danger\" role=\"alert\">
                    Vous êtes déconnecté !
                </div>";
    }
    ?>