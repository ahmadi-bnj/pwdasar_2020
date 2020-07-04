<form action="" method="post">
<table border="0" width="80%" align="center">
	<tr>
		<td>NIM</td>
		<td>:</td>
		<td><input type="text" readonly="" name="nim" value="2020010001" size="20">
			<input type="text" disabled="" name="nim" value="2020010001" size="20">
			<input type="text" hidden="" name="nim" value="2020010001" size="20"></td>
	</tr>
	<tr>
		<td>Nama Depan</td>
		<td>:</td>
		<td><input required="" type="text" name="nm_depan" size="45"></td>
	</tr>
	<tr>
		<td>Nama Belakang</td>
		<td>:</td>
		<td><input required="" type="text" name="nm_belakang" size="45"></td>
	</tr>
	<tr>
		<td>Tgl. Lahir</td>
		<td>:</td>
		<td><input required="" type="date" name="tgl_lhr" size="45"></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>:</td>
		<td><input required="" type="radio" name="jk" value="L"> Laki-Laki
			<input required="" type="radio" name="jk" value="P"> Perempuan</td>
	</tr>
	<tr>
		<td>Hobi</td>
		<td>:</td>
		<td><input required="" type="checkbox" name="hobi" value="Makan"> Makan
			<input required="" type="checkbox" name="hobi" value="Tidur"> Tidur
			<input required="" type="checkbox" name="hobi" value="Minum"> Minum</td>
	</tr>
	<tr>
		<td>Password</td>
		<td>:</td>
		<td><input required="" type="password" name="password" size="20" maxlength="10"></td>
	</tr>
	<tr>
		<td>Pekerjaan</td>
		<td>:</td>
		<td><select required="" name="pekerjaan">
			<option value="">-Pilih-</option>
			<option value="Mahasiswa">Mahasiswa</option>
			<option value="PNS">PNS</option>
		</select></td>
	</tr>
	<tr>
		<td>No. Telp</td>
		<td>:</td>
		<td><input type="text" required="" maxlength="12" name="no_tlp"></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td><textarea required="" name="alamat" cols="40" rows="3"></textarea></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="submit" value="Submit">
			<input type="reset" name="reset" value="Reset">
			<button type="submit" name="button">Button</button></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
	</tr>
</table>

</form>