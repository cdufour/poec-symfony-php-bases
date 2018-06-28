<?php
include('../../dbmanager.php');
include('../../templates/header.php');
$db = db_connect();

if (isset($_POST['submit'])) {
  // formulaire posté => écriture en BDD

} else {
  // récupérations des champs actuels du voyage identifié
  // afin de préremplir le formulaire
  $trip = getTripById($_GET['id']);
  var_dump($trip);
}

?>

<h2>Mettre à jour un voyage</h2>
<form action="edit.php" method="post">
  <div class="form-group">
    <input type="text" name="title" placeholder="Intitulé">
  </div>
  <div class="form-group">
    <select name="country">
      <option value="0">Sélectionner un pays</option>
      <?php if ($countries): ?>
        <?php foreach($countries as $country): ?>
          <option value="<?php echo $country['id']?>">
            <?php echo $country['name'] ?>
          </option>
        <?php endforeach; ?>
      <?php endif; ?>
    </select>
  </div>
  <div class="form-group">
    <label for="date_start">Date de départ</label>
    <input type="date" name="date_start">
  </div>
  <div class="form-group">
    <label for="date_end">Date de retour</label>
    <input type="date" name="date_end">
  </div>
  <div class="form-group">
    <input type="number" name="price" placeholder="Prix">
  </div>
  <div class="form-group">
    <textarea name="description" rows="8" cols="80" placeholder="Descriptif"></textarea>
  </div>
  <input type="submit" name="submit" value="Enregistrer">
</form>

<?php
include('../../templates/footer.php');
?>
