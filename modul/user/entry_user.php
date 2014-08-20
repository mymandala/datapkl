<?php

	if($_SESSION['level']=='1') {
		echo "";
	}
	elseif ($_SESSION['level']=='2') {
		echo "";
	}
	elseif ($_SESSION['level']=='3'){
	?>

<?php

	if($_SESSION['level']=='2') {
		echo "";
	}
	elseif ($_SESSION['level']=='1') { ?>

<div class="page-header"> <h3> Tambah Data User </h3> </div>
<div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Tambah Data User
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            	<form action="proses/user/input.php" method="post" enctype="multipart/form-data" class="form-horizontal" role="form">
				<div class="form-group">
					<label class="col-sm-2 control-label"> Username </label>
					<div class="col-xs-5"> 
						<input type="text" name="username" required="required" class="form-control"> </td>
					</div> 
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label"> Password </label>
					<div class="col-xs-5"> 
						<input type="password" name="password" required="required" class="form-control"> </td>
					</div> 
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label"> Nama </label>
					<div class="col-xs-5"> 
						<input type="text" name="nama" required="required" class="form-control"> </td>
					</div> 
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label"> Email </label>
					<div class="col-xs-5"> 
						<input type="email" name="email" required="required" class="form-control"> </td>
					</div> 
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label"> Type </label>
					<div class="col-sm-5">
						<select name="level" class="form-control" required>
							<option>--pilih type--</option>
							<option value="1">Administrator</option>
							<option value="2">User</option>
							<option value="3">Management</option>>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label"> Photo </label>
					<div class="col-sm-5"> 
						<input type="file" name="gambar" class="form-control" value="<?php echo $row['photo']; ?>">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-5" align="center">
						<input type="submit" value="kirim" class="btn btn-primary">
						<a href="index.php?pages=list_user"> <input type="button" value="batal" class="btn btn-primary"> </a>
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