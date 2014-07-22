<?php 
include "../../config/config.php";
$id_sekolah = $_GET['id_sekolah'];
$sql="SELECT * from sekolah where id_sekolah='$id_sekolah'";
$query = mysql_query($sql);
$sekolah = mysql_fetch_array($query);
?>
<form action="ubah.exe.php" method="post">
	<table>
		<tr>
			<td>id_sekolah</td>
			<td>:</td>
			<td>
				<input type="text" name="id_sekolah" value="<?php echo $sekolah['id_sekolah']?>"></td>
		</tr>
		<tr>
			<td>Nama Sekolah/univ</td>
			<td>:</td>
			<td><input type="text" name="nm_sekolah" value="<?php echo $sekolah['s_nama']?>"></td>
		</tr>
		<tr>
			<td>Alamat Sekolah/univ</td>
			<td>:</td>
			<td><input type="text" name="alamat_sekolah" value="<?php echo $sekolah['s_alamat']?>"></td>
		</tr>
		<tr>
			<td>Email Sekolah/univ</td>
			<td>:</td>
			<td><input type="text" name="email_sekolah" value="<?php echo $sekolah['s_email']?>"></td>
		</tr>
		<tr>
			<td>Telp Sekolah/univ</td>
			<td>:</td>
			<td><input type="text" name="telp_sekolah" value="<?php echo $sekolah['s_telp']?>"></td>
		</tr>
	</table>
	<input type="submit" value="kirim"  >

</form>