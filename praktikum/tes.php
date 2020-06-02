<pre>

<form action="hasil_tes.php" method="GET">
	Nama Depan : <input type="text" name="nm_depan" size="45"><br>
	Nama Depan : <input type="text" name="nm_belakang" size="45"><br>
	Gelar	   : <input type="text" name="gelar" size="10"><br>
	Tanggal1	   : <input readonly="" value="<?php echo date('d/m/Y'); ?>" type="text" name="tgl"><br>
	Tanggal2	   : <input type="date" name="tgl"><br>

	<input type="submit" name="simpan" value="PROSES"><br>

</form>



<!-- <?php
if(isset($_POST['simpan']))
{
	echo $_POST['nm_depan'];
	echo $_POST['nm_belakang'];
	echo $_POST['gelar'];
}
?> -->

</pre>