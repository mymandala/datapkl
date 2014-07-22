<html>
<head>
	<title></title>
</head>
<body>
<div class="table-responsive">
	<table>
		<tr>
			<td width="200"> <h2> Pembimbing </h2> </td>
			<td> <a href="index.php?pages=tambah_pembimbing"> <input type="button" class="btn btn-primary" value="+ Tambah Data"></a></td>
		</tr>
	</table>
	<br>
	<table class="table table-hover">
		<tr>
			<td> ID Pembimbing </td>
			<td> Nama </td>
			<td> Email </td>
			<td> No Telp </td>
			<td> Sekolah </td>
			<td> Opsi </td>
		</tr>
		<?php $qry = mysql_query("SELECT * from pembimbing");
		while ($data = mysql_fetch_array($qry)) { ?>
		<tr>
			<td> <?php echo $data['id_pembimbing']; ?> </td>
			<td> <?php echo $data['p_nama']; ?> </td>
			<td> <?php echo $data['p_email']; ?> </td>			
			<td> <?php echo $data['p_telp']; ?> </td>
			<td> <?php echo $data['id_sekolah']; ?> </td>
			<td> <a href="proses/pembimbing/hapus.php?id_pembimbing=<?php echo $data['id_pembimbing'];?>"onclick="return confirm('Apakah Anda yakin akan menghapus pembimbing <?php echo $data['p_nama']; ?>?')"> Hapus </a> + 
			<a href="index.php?pages=ubah_pembimbing&id_pembimbing=<?php echo $data['id_pembimbing']?>"> Ubah </a> </td>
		</tr>
		<? } ?>
	</table>
</div>
</body>
</html>
