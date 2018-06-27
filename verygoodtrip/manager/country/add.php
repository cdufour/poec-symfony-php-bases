<?php
include('../../config.php');
include('../../templates/header.php');

$db = db_connect();
?>

<h2>Ajouter un pays</h2>
<form action="add.php" method="post">
  <input type="text" name="name" placeholder="Nom">
  <input type="submit" name="submit" value="Enregistrer">
</form>

<?php
include('../../templates/footer.php');

// traitement du formulaire
if (isset($_POST['submit'])) {
  if (strlen($_POST['name']) > 2) {
    // si le nom du pays a plus de 2 caractères
    // écriture en base de données
    if ($db) {
      //1. préparation de la reqûete
      $query = $db->prepare('INSERT INTO country (name) VALUES (:name)');

      //2. exécution + binding
      $result = $query->execute(array(':name' => $_POST['name']));

      if ($result) {
        header('location:list.php');
      } else {
        echo '<p class="danger">La tentative d\'ajout a échoué</p>';
      }

    }

  }
}
?>
