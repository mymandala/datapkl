<table style="margin:10px;" width="1000">
	<tr class="page-header">
		<td width="270" style="font-size:40px;"> <h2> Laporan Data Siswa PKL Perbulan </h2> </td>
	</tr>
</table>
<br>
<div class="row">
	<div class="col-lg-12">
    	<div class="panel panel-default">
    		<div class="panel-heading">
    			<form method="post" action="index.php?pages=cari_sekolah">
    			<div class="form-group">
					<label class="col-sm-2 control-label"> Sekolah/Universitas </label>
					<div class="col-sm-3">
					<select name="id_sekolah" class="form-control">
						<option value=""> --Pilih Sekolah/Universitas-- </option>
							<?php 
								$sql = mysql_query("SELECT id_sekolah, s_nama from sekolah where status = '1'");
								while ($row = mysql_fetch_array($sql)) {
									echo "<option value='$row[id_sekolah]'>$row[s_nama]</option>";
								}
							?>
						</select>
					</div>
				</div>
	    			<div class="form-group">
					<label class="col-sm-1 control-label" > Bulan </label>
						<div class="col-sm-2">	
							<select name="bulan" class="form-control">
								<option> --Pilih Bulan--</option>
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
						</div>
					</div>
					<div class="form-group">
					<label class="col-sm-1 control-label"> Tahun </label>
						<div class="col-sm-2">	
							<select name="bulan" class="form-control">
								<option selected="selected">Tahun</option>
<?php

for($i=date('2005'); $i<=date('Y')+32; $i+=1)
		{
echo"<option value='$i'> $i </option>";
}
?>
</select>
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
								<th> NIS </th>
								<th> Nama Siswa </th>
								<th> Sekolah/Universitas </th>
								<th> Tanggal Masuk </th>
								<th> Tanggal Keluar </th>
								<th> Periode PKL </th>
								<th> Menu </th>
							</tr>
						</thead>
						<tbody>
							<?php 
							$i =1;
							$qry = mysql_query("SELECT * from tampil_lengkap where status = '1'");
							while ($data = mysql_fetch_array($qry)) { ?>
							<tr>
								<td> <?php echo $i++; ?> </td>
								<td> <?php echo $data['nis']; ?> </td>
								<td> <?php echo $data['nama_siswa']; ?> </td>
								<td> <?php echo $data['s_nama']; ?> </td>			
								<td> <?php echo tgl_indo($data['tgl_masuk']); ?> </td>
								<td> <?php echo tgl_indo($data['tgl_keluar']); ?> </td>
								<td> <?php echo $data['periode_pkl']; ?> </td>
								<td> 
									<div class="btn-group">
										<a href="index.php?pages=view_sekolah&id_siswa=<?php echo $data['id_siswa'];?>">
											<input type="button" value="lihat" class="btn btn-primary btn-sm">
										</a>
									</div>
								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>


