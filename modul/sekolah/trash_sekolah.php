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
		<td width="350" style="font-size:40px;"> <h2> Trash Data Sekolah/Universitas </h2> </td>
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
								<th> ID  </th>
								<th>Nama </th>
								<th>Alamat </th>
								<th>Email </th>
								<th>Telp </th>
								<th width="130"> Menu </th>
							</tr>
						</thead>
							<?php
							$i = 1;
							$qry = mysql_query("SELECT * FROM sekolah where status = '0'");
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
							      	<a href="proses/sekolah/hapus.php?id_sekolah=<?php echo $sekolah ['id_sekolah']; ?>" onclick="return confirm('Apakah Anda yakin akan menghapus data Sekolah <?php echo $sekolah['s_nama']; ?>?')">
							            <input type="button" value="hapus" class="btn btn-primary btn-sm">
							        </a>
							        <a href="proses/sekolah/restore.php?id_sekolah=<?php echo $sekolah ['id_sekolah']; ?>" onclick="return confirm('Apakah Anda yakin akan mengembalikan data Sekolah <?php echo $sekolah['s_nama']; ?>?')">
							            <input type="button" value="restore" class="btn btn-primary btn-sm">
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
<?php } ?>