<?php
$prodi = 'kj';

switch ($prodi) {
 case 'si' : $prodi = "Sistem Informasi"; break;
 case 'mi' : $prodi = "Manajemen Informatika"; break;
 default    : $prodi = "Prodi Yang Anda Cari Tidak Tersedia";
}
echo "STMIK Bina Nusantara Jaya Lubuklinggau Memiliki 2 Prodi diantaranya : <b>$prodi </b>";
?> 