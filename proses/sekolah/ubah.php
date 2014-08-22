<?php 
$id_sekolah = $_GET['id_sekolah'];
$sql="SELECT * from sekolah where id_sekolah='$id_sekolah'";
$query = mysql_query($sql);
$sekolah = mysql_fetch_array($query);
?>
<div class="page-header"> <h3> Ubah Data Sekolah/Universitas </h3> </div>
<div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Ubah Data Sekolah/Universitas
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            	<form action="proses/sekolah/ubah.exe.php" Enctype="multipart/form-data" method="post"  class="form-horizontal" role="form">
				<div class="form-group">
				<label class="col-sm-3 control-label"> ID Sekolah/Universitas </label>
					<div class="col-xs-2"> 
						<input type="text" name="id_sekolah" readonly class="form-control" value="<?php echo $sekolah['id_sekolah']?>"> </td>
					</div> 
				</div>
				<div class="form-group">
				<label class="col-sm-3 control-label"> Nama Sekolah </label>
					<div class="col-sm-5">
						<input type="text" name="nm_sekolah" required class="form-control" value="<?php echo $sekolah['s_nama']?>">
					</div>
				</div>
				<div class="form-group">
				<label class="col-sm-3 control-label"> Alamat </label>
					<div class="col-sm-5">
						<input type="text" class="form-control" required value="<?php echo $sekolah['s_alamat']?>" name="alamat_sekolah">
					</div>
				</div>	
				<div class="form-group">
				<label class="col-sm-3 control-label"> Email </label>
					<div class="col-sm-5">
						<input type="email" name="email_sekolah" required class="form-control" value="<?php echo $sekolah['s_email']?>">
					</div>
				</div>
				<div class="form-group">
				<label class="col-sm-3 control-label"> Telp </label>
					<div class="col-sm-5">
						<input type="text" name="telp_sekolah" required class="form-control" value="<?php echo $sekolah['s_telp']?>">
					</div>
				</div>
					<div class="form-group">
				<label class="col-sm-3 control-label"> Kepala Sekolah </label>
					<div class="col-sm-5">
						<input type="text" name="kpl_sekolah" required class="form-control" value="<?php echo $sekolah['kpl_sekolah']?>">
					</div>
				</div>
					<div class="form-group">
				<label class="col-sm-3 control-label"> NIP </label>
					<div class="col-sm-5">
						<input type="text" name="nip" required class="form-control" value="<?php echo $sekolah['nip']?>">
					</div>
				</div>
				<div class="form-group">
				<label class="col-sm-3 control-label"> Photo </label>
					<div class="col-sm-5">
						<img src="images/<?php echo $sekolah['photo'] ?>" width="50" height="50"> <br><br>
						<input type="text" name="photo" class="form-control" value="<?php echo $sekolah['photo']; ?>">
						<input type="file" name="photo" class="form-control">
					</div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-5" align="center">
						<input type="submit" value="Simpan" name="simpan" class="btn btn-primary">
						<a href="page_list_sekolah"> <input type="button" value="batal" class="btn btn-primary"> </a>
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
