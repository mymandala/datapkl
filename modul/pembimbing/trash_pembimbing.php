<?php

	if($_SESSION['level']=='1') {
		echo "";
	}
	elseif ($_SESSION['level']=='2') {
		echo "";
	}
	elseif ($_SESSION['level']=='3'){
	?>
<table style="margin:10px;" width="1000">
	<tr class="page-header">
		<td width="270" style="font-size:40px;"> <h2> Trash Data Pembimbing </h2> </td>
	</tr>
</table>
<br>
<div class="row">
	<div class="col-lg-12">
    	<div class="panel panel-default">
            <div class="panel-body">
            	<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover" id="dataTables-example">
						<thead>
							<tr>
								<th> ID Pembimbing </th>
								<th> Nama </th>
								<th> Email </th>
								<th> No Telp </th>
								<th> Sekolah </th>
								<th width="130"> Menu </th>
							</tr>
						</thead>
						<tbody>
							<?php $qry = mysql_query("SELECT pembimbing.*, sekolah.* from pembimbing, sekolah where pembimbing.id_sekolah=sekolah.id_sekolah AND pembimbing.status = '0'");
							while ($data = mysql_fetch_array($qry)) { ?>
							<tr>
								<td> <?php echo $data['id_pembimbing']; ?> </td>
								<td> <?php echo $data['p_nama']; ?> </td>
								<td> <?php echo $data['p_email']; ?> </td>			
								<td> <?php echo $data['p_telp']; ?> </td>
								<td> <?php echo $data['s_nama']; ?> </td>
								<td> 
									<a href="proses/pembimbing/restore.php?id_pembimbing=<?php echo $data['id_pembimbing'];?>"onclick="return confirm('Apakah Anda yakin akan mengembalikan data pembimbing <?php echo $data['p_nama']; ?>?')"> <input type="button" value="restore" class="btn btn-primary btn-sm"></a>  
									<a href="proses/pembimbing/hapus.php?id_pembimbing=<?php echo $data['id_pembimbing'];?>"onclick="return confirm('Apakah Anda yakin akan menghapus data pembimbing <?php echo $data['p_nama']; ?>?')"> <input type="button" value="hapus" class="btn btn-primary btn-sm"></a>  
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
<?php } ?>