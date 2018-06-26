<?php
session_start(); // accès à la session ou création
$isUserConnected = false;
$isUserAdmin = false;

if (isset($_SESSION['user'])) {
  $isUserConnected = true; // utilisateur connecté
  if ($_SESSION['user']['role'] == 'admin') {
    $isUserAdmin = true; // utilisateur a le role admin
  }
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Very Good Trip</title>
    <link rel="stylesheet" href="static/css/bootstrap.min.css">
  </head>
  <body>
    <nav>
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Accueil</a>
        </li>
        <?php
          if ($isUserAdmin) {
            echo '<li class="nav-item">';
            echo '<a class="nav-link" href="dashboard.php">Administration</a>';
            echo '</li>';
          }
        ?>
        <li class="nav-item">
          <?php
            if ($isUserConnected) {
              // Si l'utilisateur est connecté: on affiche
              // prénom + lien de déconnexion
              echo '<a class="nav-link" href="logout.php">';
              echo $_SESSION['user']['firstname'].' (Déconnexion)</a>';
            } else {
              // sinon: on affiche un lien de connexion
              echo '<a class="nav-link" href="login_form.php">Connexion</a>';
            }
          ?>
        </li>
      </ul>
    </nav>
