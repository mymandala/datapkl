<?php if ($_GET['pages']='ubah_pembimbing') { ?>

	<form action="proses/pembimbing/ubah.exe.php" method="post">
		<?php 
			$id = $_GET['id_pembimbing'];
			$qry = mysql_query("SELECT * from pembimbing where id_pembimbing = '$id'");
			while($row = mysql_fetch_array($qry)) {
		?>
		<table>
			 <input type="hidden"  name="id_pembimbing" required="required" value="<?php echo $row['id_pembimbing']; ?>"> 
			
			<tr>
				<td> Nama </td>
				<td> : </td>
				<td> <input type="text" name="p_nama" value="<?php echo $row['p_nama']; ?>"> </td>
			</tr>
			<tr>
				<td> Email </td>
				<td> : </td>
				<td> <input type="text" name="p_email" value="<?php echo $row['p_email']; ?>"> </td>
			</tr>
			<tr>
				<td> Telp </td>
				<td> : </td>
				<td> <input type="text" name="p_telp" value="<?php echo $row['p_telp']; ?>"> </td>
			</tr>
			<tr>
				<td> Sekolah </td>
				<td> : </td>
				<td>
					<input type="text" name="id_sekolah" value="<?php echo $row['id_sekolah']; ?>">
				</td>
			</tr>
			<tr>
				<td colspan="3"> <input type="submit" value="kirim" name="kirim"> </td>
			</tr>
		</table>
		<?php } ?>
	</form>
<?php } ?>