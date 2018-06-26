<?php
$isFormSubmitted = false; // booléen permettant de savoir
//si le formulaire a été soumis par l'utilisateur
$images = array(
  ["title" => "Dauphin", "file" => "delfino.jpg"],
  ["title" => "Loup", "file" => "lupo.jpg"],
  ["title" => "Taureau", "file" => "toro.jpg"]
);

if (isset($_GET['submit'])) $isFormSubmitted = true;

echo ($isFormSubmitted)
  ? 'Formulaire soumis' : 'formulaire non soumis';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="get.php" method="get">
      <select name="selectedImage">
        <option value="0">Choisir un animal</option>
        <?php
          foreach($images as $image) {
            if ($isFormSubmitted) {
              $selectedImage = $_GET['selectedImage'];
              if ($image['file'] == $selectedImage ) {
                echo '<option selected value="'.$image['file'].'">'.$image['title'].'</option>';
              } else {
                echo '<option value="'.$image['file'].'">'.$image['title'].'</option>';
              }
            } else {
              echo '<option value="'.$image['file'].'">'.$image['title'].'</option>';
            }
          }
        ?>
      </select>
      <input type="submit" name="submit" value="Valider">
    </form>

    <!-- la balise génère une requête http GET, ici sans paramètres d'url -->
    <a href="get.php">Reset</a>

    <div>
      <?php
        if ($isFormSubmitted) {
          $image = $_GET['selectedImage'];
          if ($image != "0") {
            $file = 'img/' . $image;
            echo '<img src="'.$file.'">';
          }
        }
      ?>
    </div>

  </body>
</html>
