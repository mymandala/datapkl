<?php if ($_GET['pages']=='tambah_pembimbing') { ?>
<h3> Tambah Data Pembimbing </h3>
<br>
	<form action="proses/pembimbing/tambah.exe.php" method="post" class="form-horizontal" role="form">
		<div class="form-group">
			<label class="col-sm-2 control-label"> ID Pembimbing </label>
			<div class="col-sm-5"> 
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
				<input type="text" name="id_sekolah" class="form-control">
			<div class="col-sm-5">
		</div>
		<div class="form-group"></div>
		<input type="submit" value="kirim" class="btn btn-primary">
		<a href="index.php?pages=pembimbing"> <input type="button" value="batal" class="btn btn-primary"> </a>
	</form>
<?php } ?>
