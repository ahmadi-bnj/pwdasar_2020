<?php
$cars = [
  [
    "Type" => ["G", "E"],
    "merek" => "Avanza",
    "Transmisi" => "Manual",
    "Tahun" => 2020
  ],
  [
    "Transmisi" => "Matic",
    "merek" => "Inova",
    "Type" => ["G", "E"],
    "Tahun" => 2020
  ]
]; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Array Multi Dimensi</title>
</head>

<body>
  <?php foreach ($cars as $car) : ?>
    <ul>
      <li>Merek : <?= $car["merek"]; ?> </li>
      <li>Type : <?= $car["Type"][0]; ?> </li>
      <li>Transmisi : <?= $car["Transmisi"]; ?> </li>
      <li>Tahun : <?= $car["Tahun"]; ?> </li>
    </ul>
  <?php endforeach; ?>
</body>

</html>