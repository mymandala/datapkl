<?php if ($_GET['pages']=='tambah_siswa') { ?>
<h3> Tambah Data Siswa </h3>
<br>
	<form action="proses/data_siswa/tambah.exe.php" method="post" class="form-horizontal" role="form">
		<div class="form-group">
			<label class="col-sm-2 control-label"> NIS </label>
			<div class="col-xs-2"> 
				<input type="text" name="nis" required="required" class="form-control"> </td>
			</div> 
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label"> Nama Siswa </label>
			<div class="col-sm-5">
				<input type="text" name="nama_siswa" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label"> Jenis Kelamin </label>
			<div class="col-sm-5">
				<div class="checkbox">
	        		<label>
	         			 <input type="checkbox" name="jenis_kelamin" value="Perempuan"> Perempuan
	        		</label>
	        	</div>
	        	<div class="checkbox">
	        		<label>
	         			 <input type="checkbox" name="jenis_kelamin" value="Laki-laki"> Laki-laki
	        		</label>
	      		</div>
	      	</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label"> Agama </label>
			<div class="col-sm-5">
				<select name="id_agama" class="form-control">
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
				<input type="text" name="tempat_lahir" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label"> Tanggal Lahir </label>
			<div class="col-sm-5">
                <div class="input-group input-append  date" id="dpYears" data-date="12-02-2012" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                    <input class="form-control" type="text" value="12-02-2012" readonly name="ttl">
                     <span class="input-group-addon add-on"><i class="fa fa-calendar"></i></span> 
                </div>
            </div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label"> Alamat </label>
			<div class="col-sm-5"> 
				<textarea name="alamat" class="form-control"></textarea>
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
			<label class="col-sm-2 control-label"> Pembimbing</label>
			<div class="col-sm-5">
				<select name="id_pembimbing" class="form-control">
					<?php 
						$sql = mysql_query("SELECT id_pembimbing, p_nama from pembimbing");
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
				<select name="id_prog_keahlian" class="form-control">
					<?php 
						$sql = mysql_query("SELECT id_prog_keahlian, nama_prog_keahlian from prog_keahlian");
						while ($row = mysql_fetch_array($sql)) {
							echo "<option value='$row[id_prog_keahlian]'>$row[nama_prog_keahlian]</option>";
						}
					?>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label"> Periode PKL </label>
			<div class="col-sm-5"> 
				<input type="text" name="p_telp" class="form-control">
			</div>
		</div>	
		<div class="form-group"></div>
		<input type="submit" value="kirim" class="btn btn-primary">
		<a href="index.php?pages=pembimbing"> <input type="button" value="batal" class="btn btn-primary"> </a>
	</form>
<?php } ?>
