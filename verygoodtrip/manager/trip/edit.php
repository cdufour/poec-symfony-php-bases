<?php
include('../../dbmanager.php');
include('../../templates/header.php');

if (isset($_POST['submit'])) {
  // formulaire posté => écriture en BDD
  $result = updateTrip($_POST['id'], $_POST);
  if ($result) {
    header('location:list.php');
  } else {
    echo '<p>Problème</p>';
  }

} else {
  // récupération des champs actuels du voyage identifié
  // afin de préremplir le formulaire
  $countries = getCountries();
  $trip = getTripById($_GET['id']);
}

?>

<h2>Mettre à jour un voyage</h2>
<form action="edit.php" method="post">
  <input type="hidden" name="id"
    value="<?php echo $_GET['id'] ?>">
  <div class="form-group">
    <input type="text" name="title" placeholder="Intitulé"
      value="<?php echo $trip['title'] ?>">
  </div>
  <div class="form-group">
    <select name="country">
      <option value="0">Sélectionner un pays</option>
      <?php if ($countries): ?>
        <?php foreach($countries as $country): ?>
          <?php if ($country['id'] == $trip['country']): ?>
            <option selected value="<?php echo $country['id']?>">
              <?php echo $country['name'] ?>
            </option>
          <?php else: ?>
            <option value="<?php echo $country['id']?>">
              <?php echo $country['name'] ?>
            </option>
          <?php endif; ?>
        <?php endforeach; ?>
      <?php endif; ?>
    </select>
  </div>
  <div class="form-group">
    <label for="date_start">Date de départ</label>
    <input type="date" name="date_start"
      value="<?php echo $trip['date_start'] ?>">
  </div>
  <div class="form-group">
    <label for="date_end">Date de retour</label>
    <input type="date" name="date_end"
      value="<?php echo $trip['date_end'] ?>">
  </div>
  <div class="form-group">
    <input type="number" name="price" placeholder="Prix"
      value="<?php echo $trip['price'] ?>">
  </div>
  <div class="form-group">
    <textarea name="description" rows="8" cols="80" placeholder="Descriptif">
      <?php echo $trip['description'] ?>
    </textarea>
  </div>
  <input type="submit" name="submit" value="Enregistrer">
</form>

<?php
include('../../templates/footer.php');
?>
