<html>
<head>
<title>Report Perbulan</title>
</head>
<body>
<form method="post" action="">	
Bulan :<select name="bulan">
			<option value=""> Bln</option>
			<option value="1">Januari</option>
			<option value="2">Februari</option>
			<option value="3">Maret</option>
			<option value="4">April</option>
			<option value="5">Mei</option>
			<option value="6">Juni</option>
			<option value="7">Juli</option>
			<option value="8">Agustus</option>
			<option value="9">September</option>
			<option value="10">Oktober</option>
			<option value="11">November</option>  
			<option value="12">Desember</option>  
			</select>
Tahun : <input type="text" name="tahun">
<input type="submit" class="btn btn-primary" value="cari">
</form>
<br>
	<table>
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
					<a href="index.php?pages=view&nis=<?php echo $data['nis'];?>">
						<button type="button" class="btn btn-primary">Lihat</button>
					</a>
				</div>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>

