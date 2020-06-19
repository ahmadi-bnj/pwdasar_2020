<?php
$books = ["Pemrograman WEB", "Ahmadi", 2020, 'Pemrograman'];
// $books[] = 200;
var_dump($books);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Buku</title>
</head>

<body>

  <!-- <ul>
    <li> <?php echo $books[0] ?> </li>
    <li> <?php echo $books[1] ?> </li>
    <li> <?= $books[2] ?> </li>
    <li> <?= $books[3] ?> </li>
  </ul> -->


  <?php for ($i = 0; $i < count($books); $i++) : ?>
    <ul>
      <li> <?= $books[$i]; ?> </li>
    </ul>
  <?php endfor; ?>
  <br>
  <?php foreach ($books as $book) { ?>
    <ul>
      <li> <?= $book; ?> </li>
    </ul>
  <?php }  ?>
  <!-- 
  <br>
  <?php foreach ($books as $a) : ?>
    <ul>
      <li> <?= $a; ?> </li>
    </ul>
  <?php endforeach;  ?> -->




</body>

</html>