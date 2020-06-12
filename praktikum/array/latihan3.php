<?php
$mahasiswa = ["Ahmadi", "2007010032", "Sistem Informasi"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <h1>Daftar Mahasiswa</h1>
  <ul>
    <li>Nama :<?php echo $mahasiswa[0]; ?></li>
    <li>NIM : <?php echo $mahasiswa[1]; ?></li>
    <li>Jurusan : <?php echo $mahasiswa[2]; ?></li>
  </ul>


</body>

</html>