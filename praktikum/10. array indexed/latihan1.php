<?php

// array
// array variabel yang menyimpan banyak nilai
// array terdiri pasangan key dan value
// array bisa terdiri dari beberapa tipe dat


// $nama1 = "Ahmadi";
// $nama2 = "BNJ";

// echo $nama2;

// cara menulikan array
// $nm_array = array() / $nm_array = [] 

// $hari = array("Senin", "Selasa", "Rabu");
// $bulan = ["Januari", "Februari", "Maret"];
// $arr = [123, "string/tulisan", true];

// echo $hari;

// var_dump() / print_r()

// var_dump($hari);

// echo "<br>";

// print_r($bulan);

// echo $arr[0];

// menambahkan isi array

// var_dump($hari);
// $hari[] = "Kamis";
// $hari[] = "Jumat";

// var_dump($hari);





// array
// cara membuat array

// 1. array()
// 2. []

// variabel yang terdiri dari banyak nilai
// terdiri dari pasangan key dan value 
// element array bertipe data yang berbeda


$hari = array("Senin", "Selasa", "Rabu", "Kamis", "Jumat");
$bulan = ["Januari", "Februari", "Maret"];
$arr = [123, "tulisan/string", true];

// cara menampilkan array
// var_dump() / print_r() / echo()

// var_dump($hari);
// '<br>';
// print_r($bulan);
// '<br>';
// echo ($hari[2]);

// print_r($hari);
// $hari[] = "Kamis";
// $hari[] = "Jumat";

// print_r($hari);

for ($i = 0; $i <= 3; $i++) {
  echo $hari[i];
}

foreach ($hari as $h) {
  print_r($h);
}
