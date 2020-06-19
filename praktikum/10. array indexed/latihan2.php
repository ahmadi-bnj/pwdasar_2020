<?php 
// array
// sebuah variabel yang memiliki banyak nilai
// memiliki bisa menggunakan lebih dari satu tipe data
// yang membentu array disebut dengan elemen
// array = terdiri dari pasangan key dan value
// key = index, index dimulai dari 0

// cara membuat array
// 1. array() = versi php 5.4 kebawah
// 2. [] untuk versi php 5.4 ke atas

$hari = array("Senin", "Selasa", "Rabu");
$bulan = ["Januari", "Februari", "Maret"];
$arr = [123, "text", True];

// cara menampilkan array 1. var_dump() 2. print_r() 3. echo
// echo $hari[3];
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";
// echo $arr[2];

// var_dump($hari);
// $hari[] = "Kamis";
// $hari[] = "Jumat";
// echo "<br>";
// var_dump($hari);

for ($i = 0; $i <= 3; $i++) {
  echo $hari[$i];
}
echo "<br>";

foreach ($hari as $h) {
  echo $h;
}













?>