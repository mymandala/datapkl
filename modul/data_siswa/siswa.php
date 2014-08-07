<div class="table-responsive">
	<table style="margin:10px;" width="1000">
		<tr>
			<td width="270" style="font-size:40px;"> <h2> Data Siswa PKL </h2> </td>
			<td> <a href="index.php?pages=tambah_siswa"> <input type="button" value=" + Tambah Data" class="btn btn-primary"></a></td>
			<td align="right"> 
			<form method="post" action="" class="form-inline">
				<input type="text" name="cari" required="required" placeholder="Cari.." class="form-control">				
				<input type="submit" value="Cari" name="pencarian" class="btn btn-primary">
			</form> 
			</td>
		</tr>
	</table>
	<br>
	<table class="table table-hover">
		<tr>
			<td> No </td>
			<td> NIS </td>
			<td> Nama Siswa </td>
			<td> Sekolah </td>
			<td> Program Keahlian </td>
			<td> Pembimbing </td>
			<td> Tanggal Masuk </td>
			<td> Tanggal Keluar </td>
			<td> &nbsp; </td>
		</tr>
		<?php 
		$i =1;
		$qry = mysql_query("SELECT * from tampil_lengkap");
		while ($data = mysql_fetch_array($qry)) { ?>
		<tr>
			<td> <?php echo $i++; ?> </td>
			<td> <?php echo $data['nis']; ?> </td>
			<td> <?php echo $data['nama_siswa']; ?> </td>
			<td> <?php echo $data['s_nama']; ?> </td>			
			<td> <?php echo $data['nama_prog_keahlian']; ?> </td>
			<td> <?php echo $data['p_nama']; ?> </td>
			<td> <?php echo $data['tgl_masuk']; ?> </td>
			<td> <?php echo $data['tgl_keluar']; ?> </td>
			<td> 
				<div class="btn-group">
					<button type="button" class="btn btn-primary">Aksi</button>
  						<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
    					<span class="caret"></span>
    					<span class="sr-only"></span>
  					</button>
					<ul class="dropdown-menu" role="menu">
						<li>
							<a href="index.php?pages=view&nis=<?php echo $data['nis'];?>"> Lihat </a>
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
		<?php } ?>
	</table>
</div>
