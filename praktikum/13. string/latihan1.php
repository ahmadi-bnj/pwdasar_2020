<?php
$a = "belajar Pemrograman WEB dengan PHP";

echo "<b>String asli</b>      : $a";
echo "<br><b>strtolower()</b> : " . strtolower($a);
echo "<br><b>strtoupper()</b> : " . strtoupper($a);
echo "<br><b>ucfirst()        :</b> " . ucfirst($a);
echo "<br><b>ucwords()        :</b> " . ucwords($a);
echo "<br><b>Jumlah karakter</b> : " . strlen($a);
echo "<br><b>Md5</b>            : " . md5($a);
// echo "<hr>";

$b = date("Y-m-d");
// $b = "belajar Pemrograman WEB dengan PHP";

echo "<br><b>String Asli</b>            :  $b";
echo "<br><b>Jumlah karakter</b>        : " . strlen($b);

echo "<br><b>Tahun</b> : " . substr($b, 0, 4);
echo "<br><b>Bulan</b> : " . substr($b, 5, 2);
echo "<br><b>Tanggal</b> :" . substr($b, 8, 2);
