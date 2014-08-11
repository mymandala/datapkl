<?php if ($_GET['pages']=='tambah_pembimbing') { ?>
<h3> Tambah Data Pembimbing </h3>
<br>
<div class="col-lg-12">
    <div class="well">
        <p>
			<form action="proses/pembimbing/tambah.exe.php" method="post" class="form-horizontal" role="form">
				<div class="form-group">
					<label class="col-sm-2 control-label"> ID Pembimbing </label>
					<div class="col-xs-2"> 
						<input type="text" name="id_pembimbing" required="required" class="form-control"> </td>
					</div> 
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label"> Nama </label>
					<div class="col-sm-5">
						<input type="text" name="p_nama" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label"> Email </label>
					<div class="col-sm-5">
						<input type="text" name="p_email" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label"> Telp </label>
					<div class="col-sm-5"> 
						<input type="text" name="p_telp" class="form-control">
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
						<a href="index.php?pages=pembimbing"> <input type="button" value="batal" class="btn btn-primary"> </a>
					</div>
				</div>
			</form>
		</p>
	</div>
</div>
<?php } ?>
