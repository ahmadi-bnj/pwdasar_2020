<?php
date_default_timezone_set('Asia/Jakarta');

// echo "Waktu Sekarang : " . date('d-m-Y H:i:s');
// echo '<br>';
// echo "Detik yang telah telah berlalu dari 01 januari 1970 : " . time();

// echo '<br>';
// echo 'Satu Menit Kedepan :' . date('d-m-Y H:i:s', time() + (60 * 60 * 24 * 7));
// echo '<br>';
// echo 'Satu Minggu Kedepan :' . date('d-m-Y H:i:s', time() - (60 * 60 * 24 * 7));

// // jam, menit, detik , bulan, tanggal, tahun
// echo '<br>';
echo '<br> MkTime :';
echo '<br>';
echo "Waktu Sekarang : " . date('d-m-Y H:i:s');
echo '<br>';
echo "Waktu Kedepan : " . date('d-m-Y', mktime(0, 0, 0, date('n'), date('j') + 30, date('y')));
echo '<br>';
echo "Waktu Kebelakang : " . date('d-m-Y', mktime(0, 0, 0, date('n'), date('j') - 30, date('y')));
// echo '<br>';
echo '<br>';
echo 'StrToTime :<br>';
echo 'Epoch' . $timestamp = strtotime(date('Y-m-d'));
echo '<br>';
echo 'Satu Hari Kedepan :' . date('d-m-Y', strtotime('+1 day', $timestamp));
echo '<br>';
echo 'Satu Bulan Kedepan :' . date('d-m-Y', strtotime('+1 month', $timestamp));
echo '<br>';
echo 'Satu Tahun Kedepan :' . date('l', strtotime('+1 year', $timestamp));
echo '<br>';
echo date('l', strtotime('1983-04-19'));
