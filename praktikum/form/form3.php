<form action="proses.php" method="POST">
	<table width="80%" border="0" align="center">
		<tr>
			<td>NIK</td>
			<td>:</td>
			<td><input readonly="" type="text" name="nik" value="2007010032">
				<input disabled="" type="text" name="nik" value="2007010032">
				<input hidden="" type="text" name="nik" value="2007010032"></td>
		</tr>
		<tr>
			<td>Nama Awal</td>
			<td>:</td>
			<td><input required="" type="text" name="nm_awal" size="45"></td>
		</tr>
		<tr>
			<td>Nama Akhir</td>
			<td>:</td>
			<td><input required="" type="text" name="nm_akhir" size="45"></td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td>:</td>
			<td><input required="" type="date" name="tgl_lahir"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><select required="" name="jk">
				<option value=""> -Pilih-</option>
				<option value="L"> Laki-Laki</option>
				<option value="P"> Perempuan</option>
			</select></td>
		</tr>

		<tr>
			<td>Pekerjaan</td>
			<td>:</td>
			<td>
		<input required="" type="radio" name="pekerjaan" value="Mahasiswa"> Mahasiswa
		<input required="" type="radio" name="pekerjaan" value="Guru"> Guru
		<input required="" type="radio" name="pekerjaan" value="Dosen"> Dosen
			</td>
		</tr>
		
		<tr>
			<td>Hobi</td>
			<td>:</td>
			<td><input type="checkbox" name="hobi" value="Makan"> Makan
				<input type="checkbox" name="hobi" value="Minum"> Minum
				<input type="checkbox" name="hobi" value="Tidur"> Tidur</td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input required="" type="password" name="password" size="30"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><textarea required="" name="alamat" rows="5" cols="35"></textarea></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" name="submit" value="Submit">
				<input type="reset" name="reset" value="Reset">
				<button type="submit" name="button">Button</button></td>
		</tr>
		

	</table>
</form>
<br>

<?php
if(isset($_GET['submit']))
{
echo $_GET['nik'];
echo $_GET['nm_awal'];
echo $_GET['nm_akhir'];
}
?>