<?php
require_once('../../dbmanager.php');
include('../../templates/header.php');
$trips = getTrips($full = false); // équivalent à getTrips(false)
?>

<h2>Liste des voyages</h2>
<a class="btn btn-primary btn-sm" href="add.php">Ajouter un voyage</a>
<table class="table table-bordered table-striped">
  <tr>
    <th>Intitulé</th>
    <th>Destination</th>
    <th>Dates</th>
    <th>Actions</th>
  </tr>
  <?php foreach($trips as $trip): ?>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  <?php endforeach; ?>
</table>

<?php
include('../../templates/footer.php');
?>
