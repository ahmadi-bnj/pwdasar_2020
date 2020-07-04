<?php
// function familyName($fname, $year) {
//   echo "$fname Refsnes. Born in $year <br>";
//   }
//   familyName("Hege", "1975");
//   familyName("Stale", "1978");
//   familyName("Kai Jim", "1983");


// Tanpa argumen
// function nama_bulan()
// {
//   echo 'Agustus';
// }
// nama_bulan(); 

// function nama_bulan($bulan)
// {
//   echo $bulan;
// }
// nama_bulan('Januari');

// function nama_bulan($bulan, $tahun = 2019)
// {
//   echo $bulan . ' ' . $tahun;
// }
// nama_bulan('April');

// function nama_bulan($bulan)
// {
//   $nama_bulan = array(1 => 'Januari', 2 => 'Februari', 3 => 'Maret');
//   return $nama_bulan[$bulan];
// }
// date('n') akan menghasilkan bulan sekarang dalam bentuk 1 digit, misal 3 untuk Januari
// $bulan = nama_bulan(date('n'));
// echo  date('d') . '  ' . $bulan . '  ' . date('Y');

// function nama_bulan($bulan)
// {
//   $nama_bulan = array(1 => 'Januari', 2 => 'Februari', 3 => 'Maret');
//   $semester   = $bulan < 7 ? 1 : 2;
//   return array(
//     'bulan' => $nama_bulan[$bulan],
//     'semester' => $semester
//   );
// }
// $bulan = nama_bulan(3);
// echo '<pre>';
// print_r($bulan);

//pembuatan fungsi
// function perkalian($angka1, $angka2)
// {
//   $a = $angka1;
//   $b = $angka2;
//   $hasil = $a * $b;
//   return $hasil;
// }
// $hasil = perkalian(4, 5);
// echo "Perkalian 4 x 5 adalah $hasil";
// echo "<br />";
// echo "Perkalian 7 x 2 adalah " . perkalian(7, 2);

// function cetak_ganjil()
// {
//   for ($i = 0; $i < 100; $i++) {
//     if ($i % 2 == 1) {
//       echo "$i <br> ";
//     }
//   }
// }
// cetak_ganjil();

// fungsi dengan parameter

// function cetak_ganjil($awal, $akhir)
// {
//   for ($i = $awal; $i < $akhir; $i++) {
//     if ($i % 2 == 1) {
//       echo "$i ";
//     }
//   }
// }

// $a = 10;
// $b = 50;
// echo "<b>Bilangan ganjil dari $a sampai $b : </b><br>";
// cetak_ganjil($a, $b);

// function luas_lingkaran($jari)
// {
//   return 3.14 * $jari * $jari;
// }

// $r = 10;
// echo "Luas lingkaran dengan jari-jari $r = ";
// echo luas_lingkaran($r);

// function tambah_string($str)
// {
//   $str = $str . ", Lubuklinggau";
//   return $str;
// }

// $str = "STMIK Bina Nusantara Jaya";
// echo "\$str = $str<br>";
// echo tambah_string($str) . "<br>";

// function tambah_string(&$str)
// {
//   $str = $str . ", Lubuklinggau";
//   return $str;
// }

// $str = "STMIK Bina Nusantara Jaya";
// echo "\$str = $str<br>";
// echo tambah_string($str) . "<br>";
// echo "\$str = $str<br>";

// function luas_lingkaran($jari)
// {
//   return 3.14 * $jari * $jari;
// }

// $arr = get_defined_functions();
// echo "<pre>";
// print_r($arr);
// echo "</pre>";


// memeriksa fungsi
// if (function_exists('exif_read_data')) {
//   echo "Fungsi exif_read_data() ada di PHP.<br />\n";
// } else {
//   echo "Fungsi exif_read_data() tidak ada di PHP.<br />\n";
// }

// function faktorial($angka)
// {
//   if ($angka < 2) {
//     return 1;
//   } else {
//     return ($angka * faktorial($angka - 1));
//   }
// }
// echo "faktorial 5 adalah " . faktorial(5);

// $nilai   = array(90, 70, 85, 65, 80);
// $max   = max($nilai);
// $min   = min($nilai);
// echo "Nilai Maksimal : " . $max;
// print "<br>";
// echo "Nilai Minimal : " . $min;


// function tambah($a, $b)
// {
//   return $a + $b;
// }
// echo $coba = tambah(5, 10, 20);

// function tambah($a, $b, $c)
// {
//   return $a + $b;
// }
// echo $coba = tambah(20, 10);

// function tambah()
// {
//   for ($i = 0; $i < arguments(); $i++) {
//     $hasil += arguments[$i];
//   }
//   return $hasil;
// }

// $coba = tambah(1, 2);
// echo $coba;

// function jlhBil($a, $b)
// {

//   $total = $a + $b;
//   return $total;
// }
// echo $jlhBil(10, 20);

// declare(strict_types=1);
// function addNumbers(int $a, int $b)
// {
//   return $a + $b;
// }
// echo addNumbers(5, "5 days"); 
// since strict is NOT enabled "5 days" is changed to int(5), and it will return 10

function familyName($fname)
{
  echo "$fname Refsnes.<br>";
}
familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");
