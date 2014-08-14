<?php
if ($_GET['pages']=='view_perbulan') { ?>
	<div class="page-header"> <h3> Data Siswa PKL </h3> </div>
<div class="col-lg-12">
    <div class="well"  style="font-size:17px;">
        <p>
		<?php
		$id = $_GET['id_siswa'];
		$sql = mysql_query("SELECT * from tampil_lengkap where id_siswa = '$id'");
		while ($data = mysql_fetch_array($sql)) { ?>
			<table>
				<tr>
					<td>
						<table>
							<tr>
								<td> NIS </td>
								<td width="30"> : </td>
								<td> <?php echo $data['nis']; ?> </td>
							</tr>
							<tr>
								<td> Nama Siswa </td>
								<td> : </td>
								<td> <?php echo $data['nama_siswa']; ?> </td>
							</tr>
							<tr>
								<td> Jenis Kelamin </td>
								<td> : </td>
								<td> <?php echo $data['jenis_kelamin']; ?> </td>
							</tr>
							<tr>
								<td> Agama </td>
								<td> : </td>
								<td> <?php echo $data['agama']; ?> </td>
							</tr>
							<tr>
								<td> Tempat Lahir </td>
								<td> : </td>
								<td> <?php echo $data['tempat_lahir']; ?> </td>
							</tr>
							<tr>
								<td> Tanggal Lahir </td>
								<td> : </td>
								<td> <?php echo tgl_indo($data['tanggal_lahir']); ?> </td>
							</tr>
							<tr>
								<td> Alamat </td>
								<td> : </td>
								<td> <?php echo $data['alamat']; ?> </td>
							</tr>
							<tr>
								<td> Nama Sekolah/Universitas </td>
								<td> : </td>
								<td> <?php echo $data['s_nama']; ?> </td>
							</tr>
							<tr>
								<td> Nama Pembimbing </td>
								<td> : </td>
								<td> <?php echo $data['p_nama']; ?> </td>
							</tr>
							<tr>
								<td> Program Keahlian </td>
								<td> : </td>
								<td> <?php echo $data['nama_prog_keahlian']; ?> </td>
							</tr>
							<tr>
								<td> Periode PKL </td>
								<td> : </td>
								<td> <?php echo $data['periode_pkl']; ?> </td>
							</tr>
							<tr>
								<td> Tanggal Masuk </td>
								<td> : </td>
								<td> <?php echo tgl_indo($data['tgl_masuk']); ?> </td>
							</tr>
							<tr>
								<td> Tanggal Keluar </td>
								<td> : </td>
								<td> <?php echo tgl_indo($data['tgl_keluar']); ?> </td>
							</tr>
						</table>
					<td width="200"></td>
					<td>
						<table>
							<tr>
								<td> <img src="images/<?php echo $data['photo']; ?>" width="200" height="200" ></td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</div>
		<div align="center">
			<input type="button" value=" Cetak "onclick="window.print();return false;" class="btn btn-primary"/>
			<a href="index.php?pages=laporan_perbulan"> <input type="button" value="Kembali" class="btn btn-primary"> </a>
		</div>
<?php	
	}
}
?>
 