<table style="margin:10px;" width="1000">
	<tr class="page-header">
		<td width="270" style="font-size:40px;"> <h2> Data User </h2> </td>
		<td> <a href="index.php?pages=entry_user"> <input type="button" value=" + Tambah Data" class="btn btn-primary"></a></td>
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
								<td>ID </td>
								<td>Username</td>
								<td>Nama</td>
								<td>Email</td>
								<td>Status</td>
								<td width="115">Menu</td>
							</tr>
						</thead>
						<tbody>
							<?
							$qry = mysql_query("SELECT * FROM user");
							while ($user = mysql_fetch_array($qry)){
							?>
							<tr>
								<td><?php echo $user['id_user']?></td>
								<td><?php echo $user['username']?></td>
								<td><?php echo $user['nama']?></td>
								<td><?php echo $user['email']?></td>
								<td><?php echo $user['level']?></td>
								<td><a href="proses/user/hapus.php?id_user=<?php echo $user ['id_user']; ?> ">
							            <input type="button" value="hapus" name="hapus" class="btn btn-primary btn-sm">
							        </a>
							        <a href="index.php?pages=ubah_user&id_user=<?php echo $user ['id_user']; ?> ">
							            <input type="button" value="ubah" name="sunting" class="btn btn-primary btn-sm">
							        </a>
							    </td>
							</tr>
							<?php }?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>