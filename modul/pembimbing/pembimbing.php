<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<tr>
			<td width="200"> <h2> Pembimbing </h2> </td>
			<td> <a href="index.php?pages=tambah_pembimbing"> <input type="button" value=" + Tambah Data" class="btn btn-primary"></a></td>
		</tr>
	</table>
	<br>
	<div class="table-responsive">
	<table class="table table-hover">
		<tr>
			<td> ID Pembimbing </td>
			<td> Nama </td>
			<td> Email </td>
			<td> No Telp </td>
			<td> Sekolah </td>
			<td> Opsi </td>
		</tr>
		<?php $qry = mysql_query("SELECT pembimbing.id_pembimbing, pembimbing.p_nama, pembimbing.p_email, pembimbing.p_telp, sekolah.s_nama from pembimbing, sekolah where pembimbing.id_sekolah=sekolah.id_sekolah");
		while ($data = mysql_fetch_array($qry)) { ?>
		<tr>
			<td> <?php echo $data['id_pembimbing']; ?> </td>
			<td> <?php echo $data['p_nama']; ?> </td>
			<td> <?php echo $data['p_email']; ?> </td>			
			<td> <?php echo $data['p_telp']; ?> </td>
			<td> <?php echo $data['s_nama']; ?> </td>
			<td> <a href="proses/pembimbing/hapus.php?id_pembimbing=<?php echo $data['id_pembimbing'];?>"onclick="return confirm('Apakah Anda yakin akan menghapus pembimbing <?php echo $data['p_nama']; ?>?')"> Hapus </a> + 
			<a href="index.php?pages=ubah_pembimbing&id_pembimbing=<?php echo $data['id_pembimbing']?>"> Ubah </a> </td>
		</tr>
		<? } ?>
	</table>
</div>
</body>
</html>
