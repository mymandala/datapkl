<?php

	if($_SESSION['level']=='3') {
        echo "";
    }
    elseif ($_SESSION['level']=='2' or $_SESSION['level']=='1') {
    ?>

<?php
if ($_GET['pages']=='view') { ?>
	<div class="page-header"> <h3> Data Siswa PKL </h3> </div>
<div class="col-lg-12">
    <div class="well"  style="font-size:17px;">
        <p>
		<?php
		$nis = $_GET['nis'];
		$sql = mysql_query("SELECT * from tampil_lengkap where nis = '$nis'");
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
								<td> Telepon </td>
								<td> : </td>
								<td> <?php echo $data['telepon']; ?> </td>
							</tr>
							<tr>
								<td> E-mail </td>
								<td> : </td>
								<td> <?php echo $data['email']; ?> </td>
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
								<td> 
								<?php if(!empty($data['photo'])) { ?>
								<img src="images/<?php echo $data['photo']; ?>" width="200" height="200" >
								<?php }else{
								echo "<img src=images/photo.jpg width=200 height=200>";
								} ?>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</div>
		<div align="center">
			<input type="button" id="button" value=" Cetak "onclick="window.print();return false;" class="btn btn-primary"/>
			<a href="index.php?pages=list_siswa"> <input type="button" value="Kembali" class="btn btn-primary"> </a>
		</div>
<?php	
	}
}
?>
<?php
	echo '<a href="javascript:window.print()">';
?> 
<?php } ?>