<table style="margin:10px;" width="1000">
	<tr class="page-header">
		<td width="270" style="font-size:40px;"> <h2> Trash Data Siswa PKL </h2> </td>
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
								<th> No </th>
								<th> NIS </th>
								<th> Nama Siswa </th>
								<th> Sekolah/Universitas </th>
								<th> Tanggal Masuk </th>
								<th> Tanggal Keluar </th>
								<th> Menu </th>
							</tr>
						</thead>
						<tbody>
							<?php 
							$i =1;
							$qry = mysql_query("SELECT * from tampil_lengkap where status = '0'");
							while ($data = mysql_fetch_array($qry)) { ?>
							<tr>
								<td> <?php echo $i++; ?> </td>
								<td> <?php echo $data['nis']; ?> </td>
								<td> <?php echo $data['nama_siswa']; ?> </td>
								<td> <?php echo $data['s_nama']; ?> </td>			
								<td> <?php echo tgl_indo($data['tgl_masuk']); ?> </td>
								<td> <?php echo tgl_indo($data['tgl_keluar']); ?> </td>
								<td> 
									<div class="btn-group">
										<button type="button" class="btn btn-primary btn-sm"> 
											<a href="proses/data_siswa/restore.php?id_siswa=<?php echo $data['id_siswa'];?>" onclick="return confirm('Apakah Anda yakin akan mengembalikan data siswa <?php echo $data['nama_siswa']; ?>?')"> <font color="white"> Restore </font> </a> 
										</button>
					  						<button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
					    					<span class="caret"></span>
					    					<span class="sr-only"></span>
					  					</button>
										<ul class="dropdown-menu" role="menu">
											<li> 
												<a href="proses/data_siswa/hapus.php?id_siswa=<?php echo $data['id_siswa'];?>" onclick="return confirm('Apakah Anda yakin akan menghapus data siswa <?php echo $data['nama_siswa']; ?>?')">Hapus</a>
											</li>
										</ul>
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
