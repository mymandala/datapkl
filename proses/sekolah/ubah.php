<?php 
$id_sekolah = $_GET['id_sekolah'];
$sql="SELECT * from sekolah where id_sekolah='$id_sekolah'";
$query = mysql_query($sql);
$sekolah = mysql_fetch_array($query);
?>
<div class="page-header"> <h3> Ubah Data Sekolah </h3> </div>
<div class="col-lg-12">
    <div class="well">
        <p>
			<form action="proses/sekolah/ubah.exe.php" method="post"  class="form-horizontal" role="form">
				<div class="form-group">
				<label class="col-sm-3 control-label"> ID Sekolah </label>
					<div class="col-xs-2"> 
						<input type="text" name="id_sekolah" readonly class="form-control" value="<?php echo $sekolah['id_sekolah']?>"> </td>
					</div> 
				</div>
				<div class="form-group">
				<label class="col-sm-3 control-label"> Nama Sekolah </label>
					<div class="col-sm-5">
						<input type="text" name="nm_sekolah" class="form-control" value="<?php echo $sekolah['s_nama']?>">
					</div>
				</div>
				<div class="form-group">
				<label class="col-sm-3 control-label"> Alamat </label>
					<div class="col-sm-5">
						<input type="text" class="form-control" value="<?php echo $sekolah['s_alamat']?>" name="alamat_sekolah">
					</div>
				</div>	
				<div class="form-group">
				<label class="col-sm-3 control-label"> Email </label>
					<div class="col-sm-5">
						<input type="text" name="email_sekolah" class="form-control" value="<?php echo $sekolah['s_email']?>">
					</div>
				</div>
				<div class="form-group">
				<label class="col-sm-3 control-label"> Telp </label>
					<div class="col-sm-5">
						<input type="text" name="telp_sekolah" class="form-control" value="<?php echo $sekolah['s_telp']?>">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-5" align="center">
						<input type="submit" value="Simpan" name="simpan" class="btn btn-primary">
						<a href="index.php?pages=list_sekolah"> <input type="button" value="batal" class="btn btn-primary"> </a>
					</div>
				</div>
			</form>
		</p> 
	</div> 
</div>