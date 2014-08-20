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
								<td> No </td>
								<td> Username </td>
								<td> Nama </td>
								<td> Email </td>
								<td> Level </td>
								<td width="60">Menu</td>
							</tr>
						</thead>
						<tbody>
							<?php
							$i = 1;
							$qry = mysql_query("SELECT * FROM user");
							while ($user = mysql_fetch_array($qry)){
							?>
							<tr>
								<td> <?php echo $i++ ?> </td>
								<td><?php echo $user['username']?></td>
								<td><?php echo $user['nama']?></td>
								<td><?php echo $user['email']?></td>
								<td><?php if ($user['level']=='1') {
									echo "Administrator";}
									elseif($user['level']=='2') {
									echo "User"; }
									elseif($user['level']=='3') {
									echo "Management";} ?>
								</td>
								<td><?php if ($user['level']=='1') {
									echo "<input type=button value=hapus name=hapus class=btn btn-primary btn-sm>";
									}else { ?>
										<a href="proses/user/hapus.php?id_user=<?php echo $user['id_user']; ?>" onclick="return confirm('Apakah Anda yakin akan menghapus user <?php echo $user['nama']; ?> ?')">
							            <input type="button" value="hapus" name="hapus" class="btn btn-primary btn-sm">
							        </a>

									<?php } ?>
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
<?php } ?>