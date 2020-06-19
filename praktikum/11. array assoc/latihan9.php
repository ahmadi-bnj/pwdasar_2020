<?php

// array
// array = variabel yang memiliki banyak nilai
// pasangan key dan value
// 3 jenis array
// indexed / asosiative / multidimensi
// indexed = array yang key-nya adalah index = index dimulai dari 0 
// assosiative = array yang key-nya dibuat sendiri


// $hari = ["Senin", "Selasa", "Rabu"];
// var_dump($hari);

// $mahasiswa = [
//   "nama" => "Ahmadi",
//   "nim" => "2007010032"
// ];

// var_dump($mahasiswa);


$cars = [
  [
    "gambar" => "a.jpg",
    "merek" => "Avanza",
    "tipe" => "G",
    "tahun" => 2020,
    "transmisi" => [
      "Manual",
      "Matic"
    ]
  ],
  [
    "gambar" => "b.jpg",
    "merek" => "Inova",
    "tipe" => "E",
    "tahun" => 2019,
    "transmisi" => ["Matic", "Manual"]
  ],
  [
    "gambar" => "b.jpg",
    "merek" => "Calya",
    "tipe" => "G",
    "tahun" => 2018,
    "transmisi" => ["Matic", "Manual"]
  ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kendaraan</title>
</head>

<body>
  <h1>Data Kendaraan</h1>
  <?php foreach ($cars as $car) : ?>
    <ul>
      <li> <img src="../img/<?= $car['gambar']; ?> " width="100px"> </li>
      <li>Merek : <?= $car['merek']; ?></li>
      <li>Tipe :<?= $car['tipe']; ?></li>
      <li>Tahun : <?= $car['tahun']; ?></li>
      <li>Transmisi : <?= $car['transmisi'][1]; ?></li>
    </ul>
  <?php endforeach; ?>
</body>

</html>