
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
    			<form method="post" action="page_search_perbulan">
	    			<div class="form-group">
					<label class="col-sm-1 control-label" > Bulan </label>
						<div class="col-sm-3">	
						<?php 
							$jan = "Januari";
							$feb = "Februari";
							$mar = "Maret";
							$ap = "April";
							$mei = "Mei";
							$jun = "Juni";
							$jul = "Juli";
							$aug = "Agustus";
							$sep = "September";
							$oct = "Oktober";
							$nov = "November";
							$des = "Desember";			
						?>
							<select name="bulan" class="form-control">
								<option> --Pilih Bulan--</option>
								<?php
								echo "<option value=1>".$jan."</option>";
								echo "<option value=2>".$feb."</option>";
								echo "<option value=3>".$mar."</option>";
								echo "<option value=4>".$ap."</option>";
								echo "<option value=5>".$mei."</option>";
								echo "<option value=6>".$jun."</option>";
								echo "<option value=7>".$jul."</option>";
								echo "<option value=8>".$aug."</option>";
								echo "<option value=9>".$sep."</option>";
								echo "<option value=10>".$oct."</option>";
								echo "<option value=11>".$nov."</option>";
								echo "<option value=12>".$des."</option>";
							 ?> 
							</select>
						</div>
					</div>
					<div class="form-group">
					<label class="col-sm-1 control-label"> Tahun </label>
						<div class="col-sm-3">	
							<select name="tahun" class="form-control">
								<?php

for($i=date('2007'); $i<=date('Y')+1; $i+=1)
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
										<a href="page_view_perbulan&nis=<?php echo $data['nis'];?>">
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


