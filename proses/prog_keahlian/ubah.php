<?php 
$id_prog_keahlian = $_GET['id_prog_keahlian'];
$sql="SELECT * from prog_keahlian where id_prog_keahlian='$id_prog_keahlian'";
$query = mysql_query($sql);
$sekolah = mysql_fetch_array($query);
?>

<h3> Ubah Data Program Keahlian </h3>
<br>
<div class="col-lg-12">
    <div class="well">
        <p>
			<form action="proses/prog_keahlian/ubah.exe.php" method="post" class="form-horizontal" role="form">
				<div class="form-group">
					<label class="col-sm-3 control-label"> ID Program Keahlian </label>
					<div class="col-xs-2"> 
						<input type="text" name="id_prog_keahlian" required="required" class="form-control" value="<?php echo $sekolah['id_prog_keahlian']?>"> </td>
					</div> 
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label"> Nama Program Keahlian </label>
					<div class="col-sm-5">
						<input type="text" name="nama_prog_keahlian" class="form-control" value="<?php echo $sekolah['nama_prog_keahlian']?>">
					</div>
				</div>		
				<div class="form-group">
					<div class="col-sm-5" align="center">
						<input type="submit" value="Simpan" class="btn btn-primary">
						<a href="index.php?pages=list_prog_keahlian"> <input type="button" value="batal" class="btn btn-primary"> </a>
					</div>
				</div>
			</form>
		</p>
	</div>
</div>