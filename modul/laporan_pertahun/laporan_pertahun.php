
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
    			<form method="post" action="page_cari_tahun">
					<div class="form-group">
					<label class="col-sm-1 control-label"> Tahun </label>
						<div class="col-sm-3">	
							<select name="bulan" class="form-control">
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
							$qry = mysql_query("SELECT * FROM tampil_lengkap where status = '1' ");
							while ($laporan_taun = mysql_fetch_array($qry))
							{ ?>

								<tr>
									<td><?php echo $i++; ?> </td>
									<td><?php echo $laporan_taun['nis']?></td>
									<td><?php echo $laporan_taun['nama_siswa']?></td>
									<td><?php echo $laporan_taun['s_nama']?></td>
									<td><?php echo tgl_indo($laporan_taun['tgl_masuk']) ?></td>
									<td><?php echo tgl_indo($laporan_taun['tgl_keluar'])?></td>
									<td><?php echo $laporan_taun['periode_pkl']?></td>
									<td><a href="page_view_pertahun&nis=<?php echo $laporan_taun['nis'];?>"> <input type="button" value="lihat" class="btn btn-primary btn-sm"> </a>
								        </a>
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
