<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $i=0;
    while ($i < 5) {
      $i++;
      echo "*";
      echo "<br>";
    }
    echo "<br><br>";
    for ($i=0; $i < 1; $i++) {
      for ($a=0; $a < 5; $a++) {
        echo "*****";
        echo "<br>";
      }
    }
    $i=0;
    echo "<br><br>";
    $asteriscos="*";
    echo "$asteriscos <br>";
    for ($i=0; $i <7 ; $i++) {
      $asteriscos=$asteriscos. "*";
      echo "$asteriscos <br>";
    }

    $i=0;
    echo "<br><br>";
    $asteriscos="*";
    echo "$asteriscos <br>";
    for ($i=0; $i < 2; $i++) {
      $asteriscos=$asteriscos."**";
      echo "$asteriscos <br>";
    }

    $asteriscos="***";
    echo "$asteriscos <br>";
    for ($i=0; $i < 1; $i++) {
      $asteriscos="*";
      echo "$asteriscos";
    }


    echo "<br><br>";
    $asteriscos="*";
    echo "$asteriscos <br>";
    for ($i=0; $i <4 ; $i++) {
      $asteriscos=$asteriscos. "**";
      echo "$asteriscos <br>";
    }

     ?>
  </body>
</html>
