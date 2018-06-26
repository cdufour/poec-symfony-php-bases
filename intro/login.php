<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="" method="POST">
      <input type="text" name="email" value="" placeholder="Email">
      <input type="password" name="password" value="" placeholder="Password">
      <input type="submit" name="submit" value="Connexion">
    </form>

    <?php

      // le passage de valeurs via la méthode POST permet
      // de masquer les informations transmises au serveur
      if (isset($_POST['submit'])) {
        //print_r($_GET); // affichage du tableau (ce que echo ne peut pas faire)
        $email = $_POST['email'];
        $password = $_POST['password'];

        if ($email == 'test@test.fr' && $password == '1234') {
          echo 'utilisateur trouvé dans la base';
        } else {
          echo 'utilisateur inconnu';
        }
      }

    ?>

  </body>
</html>
