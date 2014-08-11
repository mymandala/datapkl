<div class="page-header"> <h3> Tambah Data Program Keahlian </h3> </div>
<br>
<div class="col-lg-12">
    <div class="well">
        <p>
		    <form action="proses/prog_keahlian/input.php" method="post" class="form-horizontal" role="form">
				<div class="form-group">
					<label class="col-sm-3 control-label"> ID Program Keahlian </label>
					<div class="col-xs-2"> 
						<input type="text" name="id_prog_keahlian" required="required" class="form-control"> </td>
					</div> 
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label"> Nama Program Keahlian </label>
					<div class="col-sm-5">
						<input type="text" name="nm_prog_keahlian" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-5" align="center">
						<input type="submit" value="Simpan" name="simpan" class="btn btn-primary">
						<a href="index.php?pages=list_prog_keahlian"> <input type="button" value="batal" class="btn btn-primary"> </a>
					</div>
				</div>
			</form>
		</p>
    </div>
</div>
	
