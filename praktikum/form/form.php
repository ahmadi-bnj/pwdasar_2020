<form action="" method="">
	<table border="0" width="80%" align="center">
		<tr>
			<td colspan="3">Biodata</td>
			</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>NIK</td>
			<td>:</td>
			<td><input type="text" readonly="" value="Readonly" name="nik" size="45" required="" ><br>
			<input type="text" disabled="" value="Disabled" name="nik" size="45" required="" ><br>
			<input type="text" hidden="" value="Hidden" name="nik" size="45" required="" ></td>
		</tr>
		<tr>
			<td>Nama Awal</td>
			<td>:</td>
			<td><input type="text" name="f_name" size="45" required="" ></td>
		</tr>
		<tr>
			<td>Nama Akhir</td>
			<td>:</td>
			<td><input type="text" name="l_name" size="45" required="" ></td>
		</tr>
		<tr>
			<td>Tempat Lahir</td>
			<td>:</td>
			<td><input type="text" name="t_lahir" size="45" required=""></td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td>:</td>
			<td><input type="date" name="tgl_lahir" required=""></td>
		</tr>
		<tr>
			<td>Nomor Telp</td>
			<td>:</td>
			<td><input type="text" name="telp" maxlength="12" required=""></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><input type="radio" name="jk" value="Laki-Laki"> Laki-Laki
				<input type="radio" name="jk" value="Perempuan"> Perempuan</td>
		</tr>
		<tr>
			<td>Pekerjaan</td>
			<td>:</td>
			<td><select name="pekerjaan" required="">
				<option value=""> -Pilih Pekerjaan-</option>
				<option value="PNS"> PNS</option>
				<option value="Dosen"> Dosen</option>
			</select></td>
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
			<td><input type="password" name="password" required="" size="20"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><textarea name="alamat" cols="40" rows="5" required=""></textarea></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td><input type="submit" name="submit" value="SUBMIT">
				<input type="reset" name="reset" value="RESET">
				<button type="submit" name="button"> BUTTON</button></td>
		</tr>
	</table>
</form>