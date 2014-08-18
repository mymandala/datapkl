<?php if ($_GET['pages']='ubah_pembimbing') { ?>
<div class="page-header"> <h3> Ubah Data Pembimbing </h3> </div>
<div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Ubah Data Pembimbing
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            	<form action="proses/pembimbing/ubah.exe.php" method="post" class="form-horizontal" role="form">
				<?php 
					$id = $_GET['id_pembimbing'];
					$qry = mysql_query("SELECT * from pembimbing where id_pembimbing = '$id'");
					while($row = mysql_fetch_array($qry)) { ?>
					<div class="form-group"> 
						<label class="col-sm-2 control-label"> ID Pembimbing </label>
						<div class="col-sm-3">
							<input type="text"  name="id_pembimbing" class="form-control" readonly value="<?php echo $row['id_pembimbing']; ?>"> 
						</div>
					</div>
					
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
					<label class="col-sm-2 control-label"> Sekolah/Universitas </label>
					<div class="col-sm-5">
						<select name="id_sekolah" class="form-control">
						<option value=""> --Pilih Sekolah/Universitas-- </option>
							<?php 
								$sql = mysql_query("SELECT id_sekolah, s_nama from sekolah");
								while ($r = mysql_fetch_array($sql)) {
									if ($row['id_sekolah']==$r['id_sekolah']) {
										echo "<option value='$r[id_sekolah]' selected> $r[s_nama] </option>";
									}
									else {
										echo "<option value='$r[id_sekolah]'> $r[s_nama] </option>";
									}
								}
							?>
						</select>
					</div>
					</div>
					<div class="form-group">
					<div class="col-sm-5" align="center"> 
						<input type="submit" value="kirim" class="btn btn-primary">
						<a href="index.php?pages=list_pembimbing"> <input type="button" class="btn btn-primary" value="batal"> </a>
					</div>
					</div>
				<?php } ?>
			</form>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>

			<?php } ?>
