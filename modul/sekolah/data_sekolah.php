<table style="margin:10px;" width="1000">
	<tr class="page-header">
		<td width="270" style="font-size:40px;"> <h2> Data Sekolah/Universitas </h2> </td>
		<td> <a href="index.php?pages=entry_data_sekolah"> <input type="button" value=" + Tambah Data" class="btn btn-primary"></a></td>
	</tr>
</table>
<div class="row">
	<div class="col-lg-12">
    	<div class="panel panel-default">
            <div class="panel-body">
            	<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover" id="dataTables-example">
						<thead>
							<tr>
								<th> No </th>
								<th> ID Sekolah/Universitas </th>
								<th>Nama </th>
								<th>Alamat </th>
								<th>Email </th>
								<th>Telp </th>
								<th width="60"> Menu </th>
							</tr>
						</thead>
							<?php
							$i = 1;
							$qry = mysql_query("SELECT * FROM sekolah");
							while ($sekolah = mysql_fetch_array($qry))
							{
							?>
						<tbody>
							<tr>
								<td> <?php echo $i++ ?> </td>
								<td><?php echo $sekolah['id_sekolah']?></td>
								<td><?php echo $sekolah['s_nama']?></td>
								<td><?php echo $sekolah['s_alamat']?></td>
								<td><?php echo $sekolah['s_email']?></td>
								<td><?php echo $sekolah['s_telp']?></td>
								<td>
							        <a href="index.php?pages=ubah_data_sekolah&id_sekolah=<?php echo $sekolah ['id_sekolah']; ?> ">
							            <input type="button" value="ubah" name="sunting" class="btn btn-primary btn-sm">
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