<?php 
if($_SESSION['level']=='3') {
        echo "";
    }
    elseif ($_SESSION['level']=='2' or $_SESSION['level']=='1') {
    ?>
<?php if ($_GET['pages']=='tambah_siswa') { ?>
<div class="page-header"> <h3> Tambah Data Siswa PKL </h3> </div>
<div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Tambah Data Siswa PKL
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            	<form action="proses/data_siswa/tambah.exe.php" enctype="multipart/form-data" method="post" class="form-horizontal" role="form">
				<div class="form-group">
					<label class="col-sm-2 control-label" > NIS/NIM </label>
					<div class="col-xs-2"> 
						<input type="auto number" name="nis" required class="form-control"> </td>
					</div> 
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label"> Nama Siswa </label>
					<div class="col-sm-5">
						<input type="text" name="nama_siswa" required class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label"> Jenis Kelamin </label>
					<div class="col-sm-5">
						<div class="checkbox">
			        		<label>
			         			 <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
			        		</label>
			        	</div>
			        	<div class="checkbox">
			        		<label>
			         			 <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
			        		</label>
			      		</div>
			      	</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label"> Agama </label>
					<div class="col-sm-5">
						<select name="id_agama" class="form-control" required>
							<option value=""> --Pilih Agama-- </option>
							<?php 
								$sql = mysql_query("SELECT id_agama, agama from agama");
								while ($row = mysql_fetch_array($sql)) {
									echo "<option value='$row[id_agama]'> $row[agama] </option>";
								}
							?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label"> Tempat Lahir </label>
					<div class="col-sm-5"> 
						<input type="text" name="tempat_lahir" class="form-control" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label"> Tanggal Lahir </label>
					<div class="col-sm-5">
		                <input type="date" name="tanggal_lahir" class="form-control">
		            </div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label"> Alamat </label>
					<div class="col-sm-5"> 
						<textarea name="alamat" class="form-control" required></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label"> Telepon </label>
					<div class="col-sm-5">
						<input type="text" name="telepon" class="form-control" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label"> E-mail </label>
					<div class="col-sm-5">
						<input type="email" name="email" class="form-control" required>
					</div>
				</div>
				<div class="form-group">
				<div class="form-group">
					<label class="col-sm-2 control-label"> Sekolah/Universitas </label>
					<div class="col-sm-5">
						<select name="id_sekolah" class="form-control" required>
						<option value=""> --Pilih Sekolah/Universitas-- </option>
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
					<label class="col-sm-2 control-label"> Pembimbing</label>
					<div class="col-sm-5">
						<select name="id_pembimbing" class="form-control" required>
						<option value=""> --Pilih Pembimbing-- </option>
							<?php 
								$sql = mysql_query("SELECT id_pembimbing, p_nama from pembimbing where status = '1'");
								while ($row = mysql_fetch_array($sql)) {
									echo "<option value='$row[id_pembimbing]'>$row[p_nama]</option>";
								}
							?>
						</select>
					</div>
				</div>
					<div class="form-group">
					<label class="col-sm-2 control-label"> Program Keahlian </label>
					<div class="col-sm-5">
						<select name="id_prog_keahlian" class="form-control" required>
						<option value=""> --Pilih Program Keahlian-- </option>
							<?php 
								$sql = mysql_query("SELECT id_prog_keahlian, nama_prog_keahlian from prog_keahlian where status = '1'");
								while ($row = mysql_fetch_array($sql)) {
									echo "<option value='$row[id_prog_keahlian]'>$row[nama_prog_keahlian]</option>";
								}
							?>
						</select>
					</div>
				</div>
				<div class="form-group">
				<label class="col-sm-2 control-label"> Periode PKL </label>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label"> Tanggal Masuk </label>
					<div class="col-sm-5"> 
						<input type="date" name="tgl_masuk" class="form-control">
					</div>
				</div>	
				<div class="form-group">
					<label class="col-sm-2 control-label"> Tanggal Keluar </label>
					<div class="col-sm-5"> 
						<input type="date" name="tgl_keluar" class="form-control">
					</div>
				</div>	
				
					<label class="col-sm-2 control-label"> Photo </label>
					<div class="col-sm-5">
						<input type="file" name="gambar" class="form-control" value="<?php echo $row['photo']; ?>">
					</div>
				</div>	

				<div class="form-group">
					<div class="col-sm-5" align="center">
						<input type="submit" value="kirim" class="btn btn-primary">
						<a href="page_list_siswa"> <input type="button" value="batal" class="btn btn-primary"> </a>
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
<?php } ?>
