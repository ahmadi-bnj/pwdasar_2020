<?php
$mahasiswa = ["Nurul Nan Indah Putri", 20017010013, "SIstem Informasi", "SI-A"];
// $mahasiswa[] = "Perempuan";
// $mahasiswa[] = "Tidur";
// $mahasiswa[] = "nurul@gmail.com";
$mahasiswa = [];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>

  <!-- <?php for ($a = 0; $a < count($mahasiswa); $a++) { ?>
    <ul>
      <li> <?php echo $mahasiswa[$a]; ?> </li>
    </ul>
  <?php }  ?>
  <br> -->

  <!-- <?php foreach ($mahasiswa as $mhs) { ?>
    <ul>
      <li> <?php echo $mhs; ?> </li>
    </ul>
  <?php } ?>
  <br> -->
  <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
      <li> <?= $mhs; ?> </li>
    </ul>
  <?php endforeach; ?>




</body>

</html>