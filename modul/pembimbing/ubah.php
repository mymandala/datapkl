<?php if ($_GET['pages']='ubah_pembimbing') { ?>
<h3> Ubah Data Pembimbing </h3>
<br>
	<form action="proses/pembimbing/ubah.exe.php" method="post" class="form-horizontal" role="form">
		<?php 
			$id = $_GET['id_pembimbing'];
			$qry = mysql_query("SELECT * from pembimbing where id_pembimbing = '$id'");
			while($row = mysql_fetch_array($qry)) { ?>

			<input type="hidden"  name="id_pembimbing" required="required" value="<?php echo $row['id_pembimbing']; ?>">
			<div class="form-group"> 
				<label class="col-sm-2 control-label"> Nama </label>
				<div class="col-sm-5">
					<input type="text" name="p_nama" class="form-control" value="<?php echo $row['p_nama']; ?>"> 
				</div>
			</div>
			<div class="form-group"> 
				<label class="col-sm-2 control-label"> Email </label>
				<div class="col-sm-5"> 
					<input type="text" name="p_email" class="form-control" value="<?php echo $row['p_email']; ?>">
				</div>
			</div>
			<div class="form-group"> 
				<label class="col-sm-2 control-label"> No Telp </label> 
				<div class="col-sm-5">
					<input type="text" name="p_telp" class="form-control" value="<?php echo $row['p_telp']; ?>">
				</div>
			</div>
			<div class="form-group">
			<label class="col-sm-2 control-label"> Sekolah </label>
			<div class="col-sm-5">
				<select name="id_sekolah" class="form-control">
					<?php 
						$sql = mysql_query("SELECT id_sekolah, s_nama from sekolah");
						while ($row = mysql_fetch_array($sql)) {
							echo "<option value='$row[id_sekolah]'>$row[s_nama]</option>";
						}
					?>
				</select>
			</div>
		</div>
			<div class="form-group">
			<div class="col-sm-5"> 
				<input type="submit" value="kirim" class="btn btn-primary">
				<a href="index.php?pages=pembimbing"> <input type="button" class="btn btn-primary" value="batal"> </a>
			</div>
			</div>
		<?php } ?>
	</form>
<?php } ?>