<?php
if(isset($_POST['add'])){
	 $nilai = $_POST['nilai'];
	if($nilai >= 85 && $nilai <= 100){
		echo "Nilai Anda $nilai, Nilai Angka A, Anda Lulus";
	}elseif($nilai >= 75 && $nilai < 85){
		echo "Nilai Anda $nilai, Nilai Angka B, Anda Lulus";
	}elseif($nilai >= 65 && $nilai < 75){
		echo "Nilai Anda $nilai, Nilai Angka C, Anda Lulus";
	}elseif($nilai >= 55 && $nilai < 65){
		echo "Nilai Anda $nilai, Nilai Angka D, Anda Lulus";
	}elseif($nilai >= 10 && $nilai < 55){
		echo "Nilai Anda $nilai, Nilai Angka E, Gagal";
	}else{
		echo "Nilai Anda Keluar Dari Range";
	}
}
?>
