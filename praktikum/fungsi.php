<?php
// membuat fungsi
function hitungUmur($thn_lahir, $thn_sekarang){
  $umur = $thn_sekarang - $thn_lahir;
  return $umur;
}

function perkenalan($nama, $salam="Assalamualaikum"){
  echo $salam.", ";
  echo "Perkenalkan, nama saya ".$nama."<br/>";
  // memanggil fungsi lain
  echo "Saya berusia ". hitungUmur(1983, 2020) ." tahun<br/>";
  echo "Senang berkenalan dengan anda<br/>";
}


// memanggil fungsi perkenalan
perkenalan("Ahmadi");

?>
<br><br>
<?php
function kenalan($nama, $alamat)
{
echo "Perkenalkan Saya " .$nama.", <br>";
echo " Saya Berasal Dari ".$alamat."<br>";
echo "Saya Memiliki 3 Bersaudara";
}
kenalan("Ahmadi", "Lubuklinggau");
?>

