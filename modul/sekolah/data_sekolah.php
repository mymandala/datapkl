<?php 
if($_SESSION['level']=='3') {
        echo "";
    }
    elseif ($_SESSION['level']=='2' or $_SESSION['level']=='1') {
    ?>
<table style="margin:10px;" width="1000">
	<tr class="page-header">
		<td width="350" style="font-size:40px;"> <h2> Data Sekolah/Universitas </h2> </td>
		<td> <a href="page_entry_data_sekolah"> <input type="button" value=" + Tambah Data" class="btn btn-primary"></a></td>
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
								<th>Nama </th>
								<th>Alamat </th>
								<th>Email </th>
								<th>Telp </th>
								<th> Kepala Sekolah </th>
								<th> NIP </th>
								<th> Photo </th>
								<th width="115"> Menu </th>
							</tr>
						</thead>
						<tbody>
							<?php
							$i = 1;
							$qry = mysql_query("SELECT * FROM sekolah where status = '1'");
							while ($sekolah = mysql_fetch_array($qry))
							{
							?>
							<tr>
								<td> <?php echo $i++ ?> </td>
								<td><?php echo $sekolah['s_nama']?></td>
								<td><?php echo $sekolah['s_alamat']?></td>
								<td><?php echo $sekolah['s_email']?></td>
								<td><?php echo $sekolah['s_telp']?></td>
								<td> <?php echo $sekolah['kpl_sekolah']; ?> </td>
								<td> <?php echo $sekolah['nip']; ?> </td>
								<td> <?php if (!empty($sekolah['photo'])) { ?>
									 <img src="images/<?php echo $sekolah['photo']; ?>" width="50" height="50" >
									 <?php } else {
										echo "<img src=images/photo.jpg width=50 height=50>";
									 } ?>
									</td>
								<td>
							        <a href="page_ubah_data_sekolah&id_sekolah=<?php echo $sekolah ['id_sekolah']; ?> ">
							            <input type="button" value="ubah" class="btn btn-primary btn-sm">
							        </a>
							        <a href="proses/sekolah/trash.php?id_sekolah=<?php echo $sekolah ['id_sekolah']; ?>" onclick="return confirm('Apakah Anda yakin akan membuang data Sekolah <?php echo $sekolah['s_nama']; ?> ?')">
							            <input type="button" value="buang" class="btn btn-primary btn-sm">
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