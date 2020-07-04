<form method="post" action="">
  Nilai a : <input type="number" name="nilai1"><br>
  Nilai b : <input type="number" name="nilai2"><br>
  <input type="submit" name="add" value="Proses">
</form>


<?php
if (isset($_POST['add'])) {
  function penjumlahan($a, $b)
  {
    $jumlah = $a + $b;
    return $jumlah;
  }
  function pengurangan($a, $b)
  {
    $kurang = $a - $b;
    return $kurang;
  }
  function perkalian($a, $b)
  {
    $kali = $a * $b;
    return $kali;
  }
  function pembagian($a, $b)
  {
    $bagi = $a / $b;
    return $bagi;
  }
  $c = $_POST['nilai1'];
  $d = $_POST['nilai2'];

  $e = penjumlahan($c, $d);
  $f = pengurangan($c, $d);
  $g = perkalian($c, $d);
  $h = pembagian($c, $d);

  print "nilai a=$c";
  print "<br>";
  print "nilai b=$d";
  print "<br>";

  print "<b>Hasil</b>";
  print "<br>";
  print "Penjumlahan = $e";
  print "<br>";
  print "pengurangan = $f";
  print "<br>";
  print "perkalian = $g";
  print "<br>";
  print "pembagian = $h";
} ?>