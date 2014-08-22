<?php 
if($_SESSION['level']=='3') {
        echo "";
    }
    elseif ($_SESSION['level']=='2' or $_SESSION['level']=='1') {
    ?>
    
<div class="page-header"> <h3> Tambah Data Program Keahlian </h3> </div>
<div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Tambah Data Program Keahlian
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            	<form action="proses/prog_keahlian/input.php" method="post" class="form-horizontal" role="form">
				<div class="form-group">
					<label class="col-sm-3 control-label"> Nama Program Keahlian </label>
					<div class="col-sm-5">
						<input type="text" name="nm_prog_keahlian" class="form-control" required>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-5" align="center">
						<input type="submit" value="Simpan" name="simpan" class="btn btn-primary">
						<a href="page_list_prog_keahlian"> <input type="button" value="batal" class="btn btn-primary"> </a>
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