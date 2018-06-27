<?php
// remonte de 2 niveaux pour accéder au fichier
// amélioration possible: déterminer
// dynamiquement le chemin du fichier
include('../../config.php');
include('../../templates/header.php');
?>

<h2>Liste des pays</h2>
<a class="btn btn-primary btn-sm" href="add.php">Ajouter un pays</a>

<?php include('../../templates/footer.php') ?>
