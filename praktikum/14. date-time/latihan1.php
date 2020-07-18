<?php
date_default_timezone_set('Asia/Jakarta');

echo date('d-m-Y H:i:s');
echo '<br>';
echo time();
echo '<br>';
echo date('d-m-Y H:i:s', time() + 60);
echo '<br>';
echo '<br>';
// jam, menit, detik , bulan, tanggal, tahun
echo 'MK Time :<br>';
echo '<br>';
echo date('d-m-Y H:i:s', time() - (60 * 60 * 24 * 7));
echo '<br>';
echo "Waktu Kedepan : " . date('d-m-Y', mktime(0, 0, 0, date('n'), date('j') + 30, date('y')));
echo '<br>';
echo "Waktu Sekarang : " . date('d-m-Y');
echo '<br>';
echo "Waktu Kebelakang : " . date('d-m-Y', mktime(0, 0, 0, date('n'), date('j') - 30, date('y')));
echo '<br>';
echo 'StrToTime :<br>';
echo '<br>';
echo $timestamp = strtotime(date('Y-m-d'));
echo '<br>';
echo date('d-m-Y', strtotime('+1 day', $timestamp));
echo '<br>';
echo date('d-m-Y', strtotime('+1 month', $timestamp));
echo '<br>';
echo date('l', strtotime('+1 year', $timestamp));
echo '<br>';
echo date('l', strtotime('1983-04-19'));

// fungsi date fungsi yang digunakan untuk menampilkan data tanggal sesuai server komputer yang digunakan
// timestamp adalah waktu yang merujuk pada awal penggunaan waktu pertamakali yang dimulai pada 01 januari 1970

// echo date('d-m-Y');
// echo '<hr>';
// echo time();
// echo '<hr>';
// echo "Waktu Sekarang:" . date('d-m-Y H:i:s', time());
// echo '<hr>';
// echo "1 Menit Kedepan :" . date('d-m-Y H:i:s', time() + 60);
// echo '<hr>';
// echo "1 Jam Kedepan :" . date('d-m-Y H:i:s', time() + (60 * 60));
// echo '<hr>';
// echo "1 Hari Kedepan :" . date('d-m-Y H:i:s', time() + (60 * 60 * 24));




// Mktime
// echo "Waktu Sekarang : " . date('d-m-Y');
// echo "<br>";
// echo "Waktu Kedepan : " . date('d-m-Y', mktime(0, 0, 0, date('n'), date('j') + 30, date('y')));
// echo "<br>";
// echo "Waktu Kebelakang : " . date('d-m-Y', mktime(0, 0, 0, date('n') - 1, date('j'), date('y')));

// mktime(hour, minute, second, month, day, year)
// echo date('d-m-Y');
// echo date('d-m-Y', mktime(0,0,0,date('d'),date('m'),date('Y'));


// echo time();
// echo "<br>";
// echo date('d-m-Y H:i:s');

// echo "Waktu Sekarang : " . date('d-m-Y H:i:s');
// echo "<br>";
// echo "1 Menit Kedepan : " . date('d-m-Y H:i:s', time() + 60);
// echo "<br>";
// echo "1 Jam Kedepan : " . date('d-m-Y H:i:s', time() + (60 * 60));
// echo "<br>";
// echo "1 Hari Kedepan : " . date('d-m-Y H:i:s', time() + (60 * 60 * 24));
// echo "<br>";
// echo "1 Minggu Kedepan : " . date('d-m-Y H:i:s', time() + (60 * 60 * 24 * 7 * 30 * 12));


// echo date('l', strtotime('1983-04-19'));











// echo $timestamp = strtotime('2020-07-07');
// echo '<br>';
// echo $timestamp = strtotime(date('Y-m-d'));
// echo '<br>';
// echo date('d-m-Y', strtotime('+1 day', $timestamp));
// echo '<br>';
// echo date('d-m-Y', strtotime('+1 month', $timestamp));
// echo '<br>';
// echo date('d-m-Y', strtotime('+1 year', $timestamp));

// membuat fungsi
// function hitungUmur($thn_lahir, $thn_sekarang)
// {
//   $umur = $thn_sekarang - $thn_lahir;
//   return $umur;
// }

// // echo hitungUmur(1983, 2020);
// echo "Saya berusia " . hitungUmur(1983, 2020) . " tahun<br/>";


// date_default_timezone_set('UTC');
// // echo strtotime("1970-01-01 00:00:01");
// echo date('Y-m-d', 1);


// date_default_timezone_set('UTC');
// echo strtotime("1970-01-01 00:00:01");


// echo 'Default Timezone: ' . date('d-m-Y H:i:s');

// date_default_timezone_set('Asia/Jakarta');
// echo 'Indonesian Timezone: ' . date('d-m-Y H:i:s');



// echo 'Date: ' . date('Y-m-d H:i:s');
// echo 'Timestamp: ' . time();

// date_default_timezone_set('UTC');
// echo 'Date: ' . date('Y-m-d H:i:s');
// echo 'Timestamp: ' . time();

// date_default_timezone_set('Asia/Jakarta');
// echo 'Waktu sekarang: ' . date('Y-m-d H:i:s') . '<br/>';
// echo '1 menit kedepan: ' . date('Y-m-d H:i:s', time() + 60) . '<br/>';
// echo '1 jam kedepan: ' . date('Y-m-d H:i:s', time() + (60 * 60)) . '<br/>';
// echo '1 hari kedepan: ' . date('Y-m-d H:i:s', time() + (60 * 60 * 24)) . '<br/>';
// echo '7 hari kedepan: ' . date('Y-m-d H:i:s', time() + (60 * 60 * 24 * 7)) . '<br/>';

// mktime(hour, minute, second, month, day, year)

// mktime(date('H'), date('i'), date('s'), date('n'), date('j'), date('Y'));



// echo date('d-m-Y', mktime(0, 0, 0, 1, 1, 2017));
// echo '<br>';
// echo date('d-m-Y', mktime(0, 0, 0, 1, 0, 2017));
// echo '<br>';
// echo date('d-m-Y', mktime(0, 0, 0, 1, -1, 2017));
// echo '<br>';
// echo '<br>';
// echo date('d-m-Y', mktime(0, 0, 0, 1, 32, 2017));
// echo '<br>';
// echo date('d-m-Y', mktime(0, 0, 0, 1, 60, 2017));
// echo '<br>';
// echo date('d-m-Y', mktime(0, 0, 0, 2, 29, 2017));
// echo '<br>';
// echo date('d-m-Y', mktime(0, 0, 0, 13, 1, 2017));

// echo date('d-m-Y');
// echo date('d-m-Y', mktime(0, 0, 0, date('n'), date('j') + 30, date('y')));
// echo date('d-m-Y', mktime(0, 0, 0, date('n') - 1, date('j'), date('y')));

// echo strtotime('now');
// echo strtotime('2020-07-07');
// echo strtotime('08:00:00');

// echo $timestamp = strtotime('2020-07-07');
// echo '<br>';
// echo date('d-m-Y', strtotime('+1 day', $timestamp));

// // tanggal lahir
// $tanggal = new DateTime('19-04-1983');

// // tanggal hari ini
// $today = new DateTime('today');

// // tahun
// $y = $today->diff($tanggal)->y;

// // bulan
// $m = $today->diff($tanggal)->m;

// // hari
// $d = $today->diff($tanggal)->d;
// echo "Umur: " . $y . " tahun " . $m . " bulan " . $d . " hari";

// $kalimat = "satu, dua, tiga, empat, lima";
// $arr_kalimat = explode(", ", $kalimat);
// var_dump($arr_kalimat);
