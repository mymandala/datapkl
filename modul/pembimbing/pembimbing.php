<table style="margin:10px;" width="1000">
	<tr class="page-header">
		<td width="270" style="font-size:40px;"> <h2> Pembimbing </h2> </td>
		<td> <a href="index.php?pages=tambah_pembimbing"> <input type="button" value=" + Tambah Data" class="btn btn-primary"></a></td>
	</tr>
</table>
<br>
<div class="row">
	<div class="col-lg-12">
    	<div class="panel panel-default">
    		<div class="panel-heading"> Data Pembimbing </div>
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
								<th> Menu </th>
							</tr>
						</thead>
						<tbody>
							<?php $qry = mysql_query("SELECT pembimbing.id_pembimbing, pembimbing.p_nama, pembimbing.p_email, pembimbing.p_telp, sekolah.s_nama from pembimbing, sekolah where pembimbing.id_sekolah=sekolah.id_sekolah");
							while ($data = mysql_fetch_array($qry)) { ?>
							<tr>
								<td> <?php echo $data['id_pembimbing']; ?> </td>
								<td> <?php echo $data['p_nama']; ?> </td>
								<td> <?php echo $data['p_email']; ?> </td>			
								<td> <?php echo $data['p_telp']; ?> </td>
								<td> <?php echo $data['s_nama']; ?> </td>
								<td> <a href="proses/pembimbing/hapus.php?id_pembimbing=<?php echo $data['id_pembimbing'];?>"onclick="return confirm('Apakah Anda yakin akan menghapus pembimbing <?php echo $data['p_nama']; ?>?')"> <input type="button" value="Hapus" class="btn btn-primary"> </a>  
								<a href="index.php?pages=ubah_pembimbing&id_pembimbing=<?php echo $data['id_pembimbing']?>"> <input type="button" value="Ubah" class="btn btn-primary"> </a> </td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
