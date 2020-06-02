<form method="POST" action="">
<table align="center" width="80%" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="3">Input Kondisi IF_ELSEIF</td>
		
	</tr>
	<tr>
		<td>Masukkan Nilai</td>
		<td>:</td>
		<td><input type="number" name="nilai"></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="add"></td>
	</tr>

</table>
</form>

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
	}elseif($nilai >= 0 && $nilai < 55){
		echo "Nilai Anda $nilai, Nilai Angka E, Gagal";
	}else{
		echo "Nilai Anda Keluar Dari Range";
	}
}
?>