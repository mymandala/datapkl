<?php if ($_GET['pages']=='ubah_siswa') { ?>
<div class="page-header"> <h3> Ubah Data Siswa PKL </h3> </div>
<div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Ubah Data Siswa PKL
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            	<form action="proses/data_siswa/ubah.exe.php" enctype="multipart/form-data" method="post" class="form-horizontal" role="form">
			<?php 
					$id = $_GET['id_siswa'];
					$qry = mysql_query("SELECT * from tampil_lengkap where id_siswa = '$id'");
					while($data = mysql_fetch_array($qry)) { ?>
				<div class="form-group">
					<input type="hidden" name="id_siswa" value="<?php echo $data['id_siswa']; ?>">
					<label class="col-sm-2 control-label"> NIS </label>
					<div class="col-xs-2"> 
						<input type="text" name="nis" value="<?php echo $data['nis']; ?>" required="required" class="form-control"> </td>
					</div> 
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label"> Nama Siswa </label>
					<div class="col-sm-5">
						<input type="text" name="nama_siswa" class="form-control" value="<?php echo $data['nama_siswa']; ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label"> Jenis Kelamin </label>
					<div class="col-sm-5">
						<div class="checkbox">
			        		<label>
			         			 <?php 

			         			 if($data['jenis_kelamin']=='Perempuan') {
			         			 	echo "<input type=checkbox name=jenis_kelamin value=Perempuan checked> Perempuan";
			         			 } 
			         			 elseif ($data['jenis_kelamin']=='Laki-laki') {
			         			 	echo "<input type=checkbox name=jenis_kelamin value=Laki-laki checked> Laki-laki";
			         			 }
			         			 ?>
			        		</label>
			        	</div>
			        	<div class="checkbox">
			        		<label>
			         			<?php 

			         			 if($data['jenis_kelamin']=='Perempuan') {
			         			 	echo "<input type=checkbox name=jenis_kelamin value=Laki-laki> Laki-laki";
			         			 } 
			         			 elseif ($data['jenis_kelamin']=='Laki-laki') {
			         			 	echo "<input type=checkbox name=jenis_kelamin value=Perempuan> Perempuan";
			         			 }
			         			 ?>
			        		</label>
			      		</div>
			      	</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label"> Agama </label>
					<div class="col-sm-5">
						<select name="id_agama" class="form-control">
						<option value=""> --Pilih Agama-- </option>
							<?php 
								$sql = mysql_query("SELECT id_agama, agama from agama");
								while ($row = mysql_fetch_array($sql)) {
									if ($data['id_agama']==$row['id_agama']) {
										echo "<option value='$row[id_agama]' selected> $row[agama] </option>";
									}
									else {
										echo "<option value='$row[id_agama]'> $row[agama] </option>";
									}
								}
							?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label"> Tempat Lahir </label>
					<div class="col-sm-5"> 
						<input type="text" name="tempat_lahir" class="form-control" value="<?php echo $data['tempat_lahir']; ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label"> Tanggal Lahir </label>
					<div class="col-sm-5">
						<input type="date" name="tanggal_lahir" class="form-control" value="<?php echo $data['tanggal_lahir']; ?>">
		            </div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label"> Alamat </label>
					<div class="col-sm-5"> 
						<textarea name="alamat" class="form-control"> <?php echo $data['alamat']; ?> </textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label"> Sekolah/Universitas </label>
					<div class="col-sm-5">
						<select name="id_sekolah" class="form-control">
						<option value=""> --Pilih Sekolah/Universitas-- </option>
							<?php 
								$sql = mysql_query("SELECT id_sekolah, s_nama from sekolah");
								while ($row = mysql_fetch_array($sql)) {
									if ($data['id_sekolah']==$row['id_sekolah']) {
										echo "<option value='$row[id_sekolah]' selected> $row[s_nama] </option>";
									}
									else {
										echo "<option value='$row[id_sekolah]'> $row[s_nama] </option>";
									}
								}
							?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label"> Pembimbing</label>
					<div class="col-sm-5">
						<select name="id_pembimbing" class="form-control">
						<option value=""> --Pilih Pembimbing-- </option> 
							<?php 
								$sql = mysql_query("SELECT id_pembimbing, p_nama from pembimbing");
								while ($row = mysql_fetch_array($sql)) {
									if ($data['id_pembimbing']==$row['id_pembimbing']) {
										echo "<option value='$row[id_pembimbing]' selected> $row[p_nama] </option>";
									}
									else {
										echo "<option value='$row[id_pembimbing]'> $row[p_nama] </option>";
									}
								}
							?>
						</select>
					</div>
				</div>
					<div class="form-group">
					<label class="col-sm-2 control-label"> Program Keahlian </label>
					<div class="col-sm-5">
						<select name="id_prog_keahlian" class="form-control">
						<option value=""> --Pilih Program Keahlian-- </option>
							<?php 
								$sql = mysql_query("SELECT id_prog_keahlian, nama_prog_keahlian from prog_keahlian");
								while ($row = mysql_fetch_array($sql)) {
									if ($data['id_prog_keahlian']==$row['id_prog_keahlian']) {
										echo "<option value='$row[id_prog_keahlian]' selected> $row[nama_prog_keahlian] </option>";
									}
									else {
										echo "<option value='$row[id_prog_keahlian]'> $row[nama_prog_keahlian] </option>";
									}
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
						<input type="date" name="tgl_masuk" class="form-control" value="<?php echo $data['tgl_masuk']; ?>">
					</div>
				</div>	
				<div class="form-group">
					<label class="col-sm-2 control-label"> Tanggal Keluar </label>
					<div class="col-sm-5"> 
						<input type="date" name="tgl_keluar" class="form-control" value="<?php echo $data['tgl_keluar']; ?>">
					</div>
				</div>	
				<div class="form-group">
					<label class="col-sm-2 control-label"> Photo </label>
					<div class="col-sm-5"> 
					<img src="images/<?php echo $data['photo'] ?>" width=150 height=150> <br><br>
						<input type="text" name="photo" class="form-control" value="<?php echo $data['photo']; ?>">
						<input type="file" name="gambar" class="form-control">
					</div>
				</div>	

				<div class="form-group">
					<div class="col-sm-5">
						<input type="submit" value="kirim" class="btn btn-primary">
						<a href="index.php?pages=list_siswa"> <input type="button" value="batal" class="btn btn-primary"> </a>
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


																																																																																				