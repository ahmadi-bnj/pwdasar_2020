<pre>
<form action="" method="POST">

	Nama Depan 		: <input required="" type="text" name="nm_depan" size="45"><br>
	Nama Belakang 		: <input required="" type="text" name="nm_belakang" size="45"><br>
	Gelar 			: <input required="" type="text" name="gelar" size="45"><br>

	<input type="submit" name="simpan" value="PROSES">

</form>

<br><br>

<?php
if(isset($_POST['simpan']))
{
				echo $_POST['nm_depan'];
				echo $_POST['nm_belakang'];
				echo $_POST['gelar'];
}
?> 
</pre>