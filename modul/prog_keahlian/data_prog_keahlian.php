<table style="margin:10px;" width="1000">
	<tr class="page-header">
		<td width="400" style="font-size:40px;"> <h2> Data Program Keahlian </h2> </td>
		<td> <a href="index.php?pages=entry_prog_keahlian"> <input type="button" value=" + Tambah Data" class="btn btn-primary"></a></td>
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
								<th width="115"> Menu </th>
							</tr>
						</thead>
						<?php
						$qry = mysql_query("SELECT * FROM prog_keahlian where status = '1'");
						while ($jurusan = mysql_fetch_array($qry)){
						?>
						<tbody>
							<tr>
								<td><?php echo $jurusan['id_prog_keahlian']?></td>
								<td><?php echo $jurusan['nama_prog_keahlian']?></td>
								<td>
									<a href="proses/prog_keahlian/trash.php?id_prog_keahlian=<?php echo $jurusan ['id_prog_keahlian']; ?> "onclick="return confirm('Apakah Anda yakin akan membuang data Program Keahlian <?php echo $jurusan['nama_prog_keahlian']; ?>?')">
							            <input type="button" value="buang" name="sunting" class="btn btn-primary btn-sm">
							        </a>
							        <a href="index.php?pages=ubah_prog_keahlian&id_prog_keahlian=<?php echo $jurusan ['id_prog_keahlian']; ?> ">
							            <input type="button" value="ubah" name="sunting" class="btn btn-primary btn-sm">
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


