<?php
require_once('config.php');

function getCountries() {
  $db = db_connect();
  $countries = null;
  if ($db) {
    $query = $db->prepare(
      'SELECT * FROM country ORDER BY name ASC');
    $result = $query->execute();
    if ($result) {
      $countries = $query->fetchAll(PDO::FETCH_ASSOC);
      return $countries;
    }
  }
  return $countries;
}

?>
