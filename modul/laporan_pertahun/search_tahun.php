<table style="margin:10px;" width="1000">
	<tr class="page-header">
		<td width="270" style="font-size:40px;"> <h2> Laporan Data Siswa PKL Pertahun </h2> </td>
	</tr>
</table>
<br>
<div class="row">
	<div class="col-lg-12">
    	<div class="panel panel-default">
    		<div class="panel-heading">
    			<form method="post" action="index.php?pages=cari_tahun">
					<div class="form-group">
					<label class="col-sm-1 control-label"> Tahun </label>
						<div class="col-sm-3">	
							<input type="text" name="tahun" class="form-control">
						</div>
					</div>
					<input type="submit" class="btn btn-primary" value="cari" name="cari">
				</form>
				</div>


<?php
	$cari = $_POST['tahun'];
	$tampil = "SELECT * from tampil_lengkap where YEAR(tgl_masuk) like '$cari%' or YEAR (tgl_keluar) like '$cari%'";
	
	$sql = mysql_query ($tampil) or die (mysql_error());
	$i =1;

?>

<div class="form-group">
					<label class="col-sm-1 control-label"> Tahun </label>
						<div class="col-sm-3">	
							<input type="text" name="tahun" class="form-control">
						</div>
					</div>
					<input type="submit" class="btn btn-primary" value="cari">
				</form>
			</div>
            <div class="panel-body">
            	<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover" id="dataTables-example">
						<thead>
							<tr>
								<th> No </th>
								<th> Nis </th>
								<th> Nama </th>
								<th> Sekolah/Universitas</th>
								<th> Tanggal Masuk </th>
								<th> Tanggal Keluar</th>
								<th> Periode PKL </th>
								<th> Menu </th>
							</tr>
								<?php while ($laporan_taun=mysql_fetch_array($sql)) { ?>
		<tr>
								<td><?php echo $i++; ?> </td>
								<td><?php echo $laporan_taun['nis']?></td>
								<td><?php echo $laporan_taun['nama_siswa']?></td>
								<td><?php echo $laporan_taun['s_nama']?></td>
								<td><?php echo tgl_indo($laporan_taun['tgl_masuk'])?></td>
								<td><?php echo tgl_indo($laporan_taun['tgl_keluar'])?></td>
								<td><?php echo $laporan_taun['periode_pkl']?></td>
								<td><a href="../../index.php?pages=view_pertahun&nis=<?php echo $laporan_taun['nis'];?>"> <input type="button" value="lihat" class="btn btn-primary btn-sm"> </a>
								    </a>
							    </td>
							</tr>
	<?php } ?>
	</table>
	</thead>
	</div>
	</thead>
	<br>
	<br>
