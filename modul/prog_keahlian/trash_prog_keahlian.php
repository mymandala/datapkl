<table style="margin:10px;" width="1000">
	<tr class="page-header">
		<td width="400" style="font-size:40px;"> <h2> Trash Program Keahlian </h2> </td>
	</tr>
</table>
<br>
<div class="row">
	<div class="col-lg-8">
    	<div class="panel panel-default" >
            <div class="panel-body" >
            	<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover" id="dataTables-example">
						<thead>
							<tr>
								<th> Id Program Keahlian</th>
								<th> Jenis Program Keahlian</th>
								<th width="130"> Menu </th>
							</tr>
						</thead>
						<?php
						$qry = mysql_query("SELECT * FROM prog_keahlian where status = '0'");
						while ($jurusan = mysql_fetch_array($qry)){
						?>
						<tbody>
							<tr>
								<td><?php echo $jurusan['id_prog_keahlian']?></td>
								<td><?php echo $jurusan['nama_prog_keahlian']?></td>
								<td>
									<a href="proses/prog_keahlian/hapus.php?id_prog_keahlian=<?php echo $jurusan ['id_prog_keahlian']; ?> " onclick="return confirm('Apakah Anda yakin akan menghapus data Program Keahlian <?php echo $jurusan['nama_prog_keahlian']; ?>?')">
							            <input type="button" value="hapus" class="btn btn-primary btn-sm">
							        </a>
							        <a href="proses/prog_keahlian/restore.php?id_prog_keahlian=<?php echo $jurusan ['id_prog_keahlian']; ?> " onclick="return confirm('Apakah Anda yakin akan mengembalikan data Program Keahlian <?php echo $jurusan['nama_prog_keahlian']; ?>?')">
							            <input type="button" value="restore" class="btn btn-primary btn-sm">
							        </a>
							    </td>
							</tr>
						</tbody>
						<?php } ?>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>


