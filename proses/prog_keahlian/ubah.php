<?php 
$id_prog_keahlian = $_GET['id_prog_keahlian'];
$sql="SELECT * from prog_keahlian where id_prog_keahlian='$id_prog_keahlian'";
$query = mysql_query($sql);
$sekolah = mysql_fetch_array($query);
?>
<form action="proses/prog_keahlian/ubah.exe.php" method="post">
	<table>
		<tr>
			<td>ID Program Keahlian</td>
			<td>:</td>
			<td>
				<input type="text" name="id_prog_keahlian" value="<?php echo $sekolah['id_prog_keahlian']?>"></td>
		</tr>
		<tr>
			<td>Nama Program Keahlian</td>
			<td>:</td>
			<td><input type="text" name="nm_prog_keahlian" value="<?php echo $sekolah['nama_prog_keahlian']?>"></td>
		</tr>
	</table>
	<input type="submit" value="kirim"  >

</form>