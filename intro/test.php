<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formation: Bases du PHP</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>

<?php
// Variables

// types simples (primitifs, scalaires)
$message = 'Bienvenue à tous !'; // string
$age = 18; // number, integer
$weight = 80.5; // number, float
$logged = false; // booblean
$name = null;
$html = '';

// types complexes (tableaux)
// tableaux simples, indexés numeriques (premier indice: 0)
$months = ['Janvier', 'Février', 'Mars'];
$bazar = ['Chaîne', 99, true, null, $age, $message, $months];

// tableau associatif (clé associée à valeur)
$lloris = [
  'name' => 'Hugo Lloris',
  'number' => 1,
  'club' => 'Tottenham',
  'injured' => true
];

$matuidi = [
  'name' => 'Blaise Matuidi',
  'number' => 6,
  'club' => 'Juventus',
  'injured' => true
];

$pogba = [
  'name' => 'Paul Pogba',
  'number' => 6,
  'club' => 'Manchester',
  'injured' => false
];

echo $lloris['name'];
echo '<br>';
echo $matuidi['club'];
echo '<br>';

$players = [$lloris, $matuidi, $pogba];

echo $bazar[6][2]; // output: Mars


echo '<h1>' . $message . '</h1>';
echo $age * 2;

if ($logged) {
  echo '<p>utilisateur connecté</p>';
} else {
  echo '<p>utilisateur non connecté</p>';
}

if ($age > 17) {
  echo '<p>Tu es majeur, tant mieux</p>';
} else {
  echo '<p>Tant pis, tu ne peux pas accéder à ce contenu illicite</p>';
}

// boucles
// Affichage d'une liste de mois
$html = '<ul>';
for ($i=0; $i<sizeof($months); $i++) {
  $html .= '<li>'. $months[$i] .'</li>';
}
$html .= '</ul>';
echo $html;
// fin du premier bloc PHP
?>

<div>
  <input id="cbInjured" type="checkbox">
  <span>Joueurs en forme</span>
</div>

<form>
  <div>
    <input id="cbInjured2" type="checkbox">
    <span>Joueurs en forme</span>
    <input type="submit" name="" value="Valider">
  </div>
</form>


<?php
// création d'un tableau de joueurs
// déclaration d'un tableau de strings  via la fonction array()
$tableHeaders = array('Nom', 'Numéro', 'Club', 'Etat de forme');
$html = '<table class="table table-bordered table-striped">';
$html .= buildTableHeader($tableHeaders);
foreach($players as $player) {
  $html .= '<tr>';
  $html .= '<td>'.$player['name'].'</td>';
  $html .= '<td>'.$player['number'].'</td>';
  $html .= '<td>'.$player['club'].'</td>';

  // if ($player['injured']) {
  //   $html .= '<td>Blessé</td>';
  // } else {
  //   $html .= '<td>En pleine forme</td>';
  // }

  // équivalent en notation ternaire
  $html.= ($player['injured'])
    ? '<td class="injured">Blessé</td>' : '<td>En forme</td>';

  $html .= '</tr>';
}
$html .= '</table>';
echo $html;


function buildTableHeader($columnHeaders) {
  $output = '<tr>';
  forEach($columnHeaders as $header) {
    $output .= '<th>'. $header .'</th>';
  }
  $output .= '</tr>';
  return $output;
}

?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/zepto/1.2.0/zepto.min.js"></script>
<script src="js/app.js"></script>
</body>
</html>
