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

function getTrips($full = true) {
  $db = db_connect();
  $trips = null;
  if ($db) {
    if ($full) {
      $query = $db->prepare(
        'SELECT * FROM trip ORDER BY date_start DESC');
    } else {
      // si le paramètre $full vaut false, on ne prend
      // qu'une partie des colonnes
      $query = $db->prepare(
        'SELECT title, country, date_start, date_end FROM trip ORDER BY date_start DESC');
    }
    $result = $query->execute();
    if ($result) {
      $trips = $query->fetchAll(PDO::FETCH_ASSOC);
      return $trips;
    }
  }
  return $trips;
}

?>
