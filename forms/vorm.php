<?php
/**
 * file name: vorm.php;
 * autor: anna.karutina;
 * date: 26.11.2019;
 */
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>06 - PHP - Vormid</title>
</head>
<body>
<h1>Arvutused</h1>
<form action="arvutused.php" method="get">
    <h2>Kera</h2>
    raadius <input type="text" name="kera-raadius"><br><hr>
    <h2>Koonus</h2>
    raadius <input type="text" name="koonuse-raadius"><br>
    kõrgus <input type="text" name="koonuse-korgus"><br><hr>
    <h2>Silinder</h2>
    raadius <input type="text" name="silindri-raadius"><br>
    kõrgus <input type="text" name="silindri-korgus"><br>
  <input type="submit" value="Saada">
</form>
</body>
</html>
