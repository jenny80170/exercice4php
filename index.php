<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Exercice 4</title>
</head>
<body>
  <h1>Multiplier la variable number avec la variable multiple et afficher le résultat</h1>
    <?php
      $number = 14;
      $multiple = 18;
      for($i = 1; $i <= $multiple; $i++){
      $result = $number * $i;
          echo 'Multiplication de $number par $multiple :' .$result;
      }
    ?>
    </body>
    </html>
