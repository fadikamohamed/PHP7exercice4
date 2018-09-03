<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>User</title>
  </head>
  <body>
    <p>
      <?php
        if (isset($_POST['lastname']) AND isset($_POST['firstname'])) {
          echo 'Votre nom est ' . $_POST['lastname'] . ' ' . $_POST['firstname'];
        }
       ?>
    </p>
  </body>
</html>
