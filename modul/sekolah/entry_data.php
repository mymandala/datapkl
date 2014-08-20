<?php 
if($_SESSION['level']=='3') {
        echo "";
    }
    elseif ($_SESSION['level']=='2' or $_SESSION['level']=='1') {
    ?>

<div class="page-header"> <h3> Tambah Data Sekolah/Universitas </h3> </div>
<div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Tambah Data Sekolah/Universitas
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            	<form action="proses/sekolah/input.php" method="post" class="form-horizontal" role="form">
				<div class="form-group">
				<label class="col-sm-3 control-label"> Nama Sekolah/Universitas </label>
					<div class="col-sm-5">
						<input type="text" name="nm_sekolah" class="form-control" required>
					</div>
				</div>
				<div class="form-group">
				<label class="col-sm-3 control-label"> Alamat </label>
					<div class="col-sm-5">
						<input type="text" class="form-control" name="alamat_sekolah" required>
					</div>
				</div>
				<div class="form-group">
				<label class="col-sm-3 control-label"> Email </label>
					<div class="col-sm-5">
						<input type="email" name="email_sekolah" class="form-control" required>
					</div>
				</div>
				<div class="form-group">
				<label class="col-sm-3 control-label"> Telp </label>
					<div class="col-sm-5">
						<input type="text" name="telp_sekolah" class="form-control" required>
					</div>
				</div>
				<div class="form-group">
				<label class="col-sm-3 control-label"> Kepala Sekolah </label>
					<div class="col-sm-5">
						<input type="text" name="kpl_sekolah" class="form-control" required>
					</div>
				</div>
				<div class="form-group">
				<label class="col-sm-3 control-label"> NIP </label>
					<div class="col-sm-5">
						<input type="text" name="nip" class="form-control" required>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-5" align="center">
						<input type="submit" value="Simpan" name="simpan" class="btn btn-primary">
						<a href="index.php?pages=list_sekolah"> <input type="button" value="batal" class="btn btn-primary"> </a>
					</div>
				</div>
			</form>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
<?php } ?>