<html>
<head>
	<title></title>
</head>
<body>
<div class="table-responsive">
	<table>
		<tr>
			<td width="200"> <h2> Data Siswa </h2> </td>
			<td> <a href="index.php?pages=tambah_siswa"> <input type="button" class="btn btn-primary" value="+ Tambah Data"></a></td>
		</tr>
	</table>
	<br>
	<table class="table table-hover">
		<tr>
			<td> NIS </td>
			<td> Nama Siswa </td>
			<td> Sekolah </td>
			<td> Program Keahlian </td>
			<td> Pembimbing </td>
			<td> Periode PKL </td>
			<td> &nbsp; </td>
		</tr>
		<?php $qry = mysql_query("SELECT * from tampil_lengkap");
		while ($data = mysql_fetch_array($qry)) { ?>
		<tr>
			<td> <?php echo $data['nis']; ?> </td>
			<td> <?php echo $data['nama_siswa']; ?> </td>
			<td> <?php echo $data['s_nama']; ?> </td>			
			<td> <?php echo $data['nama_prog_keahlian']; ?> </td>
			<td> <?php echo $data['p_nama']; ?> </td>
			<td> <?php echo $data['periode_pkl']; ?> </td>
			<td> 
				<div class="btn-group">
					<button type="button" class="btn btn-primary">Aksi</button>
  						<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
    					<span class="caret"></span>
    					<span class="sr-only"></span>
  					</button>
					<ul class="dropdown-menu" role="menu">
						<li>
							<a href="#"> Lihat </a>
						</li>
						<li> 
							<a href="proses/data_siswa/hapus.php?nis=<?php echo $data['nis'];?>"onclick="return confirm('Apakah Anda yakin akan menghapus data siswa <?php echo $data['nama_siswa']; ?>?')">Hapus</a>
						</li>
						<li>
							<a href="index.php?pages=ubah_siswa&nis=<?php echo $data['nis']?>"> Ubah </a>
						</li>
					</ul>
				</div>
			</td>
		</tr>
		<? } ?>
	</table>
</div>
</body>
</html>
