<div class="page-header"> <h3> Tambah Data Siswa PKL </h3> </div>
<div class="col-lg-12">
    <div class="well">
        <p>
			<form action="proses/sekolah/input.php" method="post" class="form-horizontal" role="form">
				<div class="form-group">
				<label class="col-sm-3 control-label"> ID Sekolah </label>
					<div class="col-xs-2"> 
							<input type="text" name="id_sekolah" required="required" class="form-control"> </td>
					</div> 
				</div>
				<div class="form-group">
				<label class="col-sm-3 control-label"> Nama Sekolah/Universitas </label>
					<div class="col-sm-5">
						<input type="text" name="nm_sekolah" class="form-control">
					</div>
				</div>
				<div class="form-group">
				<label class="col-sm-3 control-label"> Alamat </label>
					<div class="col-sm-5">
						<input type="text" class="form-control" name="alamat_sekolah">
					</div>
				</div>
				<div class="form-group">
				<label class="col-sm-3 control-label"> Email </label>
					<div class="col-sm-5">
						<input type="text" name="email_sekolah" class="form-control">
					</div>
				</div>
				<div class="form-group">
				<label class="col-sm-3 control-label"> Telp </label>
					<div class="col-sm-5">
						<input type="text" name="telp_sekolah" class="form-control">
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