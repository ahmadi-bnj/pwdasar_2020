<?php
$books = [
  [
    "judul" => "Web Desain",
    "pengarang" => "Ahmadi",
    "penerbit" => "Tiga Saudara",
    "tahun" => 2019,
    "halaman" => [100, 150, 200]
  ],
  [
    "pengarang" => "Hengki",
    "penerbit" => "Erlangga",
    "tahun" => 2020,
    "judul" => "Pemrograman Web PHP",
    "halaman" => [100, 150, 200]
  ]
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Array Multi Dimensional</title>
</head>

<body>
  <?php foreach ($books as $book) : ?>
    <ul>
      <li> Judul Buku :<?= $book["judul"]; ?> </li>
      <li> Pengarang : <?= $book["pengarang"]; ?> </li>
      <li> Penerbit : <?= $book["penerbit"]; ?> </li>
      <li> Tahun Terbit :<?= $book["tahun"]; ?> </li>
      <li> Jumlah Halaman : <?= $book["halaman"][2]; ?> </li>
    </ul>
  <?php endforeach; ?>
</body>

</html>