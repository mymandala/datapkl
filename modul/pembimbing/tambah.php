<?php if ($_GET['pages']=='tambah_pembimbing') { ?>
<div class="page-header"> <h3> Tambah Data Pembimbing </h3> </div>
<div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Tambah Data Pembimbing
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            	<form action="proses/pembimbing/tambah.exe.php" method="post" class="form-horizontal" role="form">
				<div class="form-group">
					<label class="col-sm-2 control-label"> Nama </label>
					<div class="col-sm-5">
						<input type="text" name="p_nama" class="form-control" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label"> Email </label>
					<div class="col-sm-5">
						<input type="email" name="p_email" class="form-control" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label"> Telp </label>
					<div class="col-sm-5"> 
						<input type="text" name="p_telp" class="form-control" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label"> Sekolah </label>
					<div class="col-sm-5">
						<select name="id_sekolah" class="form-control">
							<?php 
								$sql = mysql_query("SELECT id_sekolah, s_nama from sekolah where status = '1'");
								while ($row = mysql_fetch_array($sql)) {
									echo "<option value='$row[id_sekolah]'>$row[s_nama]</option>";
								}
							?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-5" align="center">
						<input type="submit" value="kirim" class="btn btn-primary">
						<a href="index.php?pages=list_pembimbing"> <input type="button" value="batal" class="btn btn-primary"> </a>
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
