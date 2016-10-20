<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejemplos de repetición</title>
  </head>
  <body>
    <?php
echo "<table><tr><td><strong>WHILE<br>";
    //////////EJEMPLO CON WHILE//////////
    $a=1;
    while ($a <= 10) {
    $tabla = $a*2;
    echo "2 * $a = $tabla <br>";
    $a++;
    }

echo "</strong></td>";
echo "<td><strong>FOR<br>";
    //////////EJEMPLO CON UN FOR//////////
    for ($i=1; $i <= 10; $i++) {
      $tabla= $i * 2;
      echo "$i * 2 = $tabla <br>";
    }
    echo "</strong></td></tr></table>";

    ?>
</html>
