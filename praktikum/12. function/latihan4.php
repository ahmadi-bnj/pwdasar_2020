<?php
// function perkalian($a, $b)
// {
//   $total = $a * $b;
//   return $total;
// }

// echo $total = perkalian(100, 100);
// echo "<br>";
// echo $total = perkalian(10, 100);
// echo "<br>";
// echo $total = perkalian(100, 200);
// echo "<br>";

function perkenalan($nama = "Admin", $salam = "Sore")
{
  // echo $salam . ", ";
  // echo $salam . ", " . "Perkenalkan, nama saya " . $nama . "<br/>";
  echo "Selamat " . $salam . " Anda Login Sebagai " . $nama;
}

perkenalan("AHMADI", "MALAM");
echo "<br>";
perkenalan("MADI");
