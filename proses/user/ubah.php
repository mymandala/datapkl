<?php 
	$id_user= $_GET['id_user'];
	$sql="SELECT * from user where id_user='$id_user'";
	$query = mysql_query($sql);
	$user = mysql_fetch_array($query);
?>

<div class="page-header"> <h3> Ubah Data User </h3> </div>
<div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Ubah Data User
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            	<form action="proses/user/ubah.exe.php" method="post" enctype="multipart/form-data" class="form-horizontal" role="form">
				<div class="form-group">
					<label class="col-sm-2 control-label"> Id User </label>
					<div class="col-xs-2"> 
						<input type="text" name="id_user" readonly class="form-control" value="<?php echo $user['id_user']?>"> </td>
					</div> 
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label"> Username </label>
					<div class="col-xs-5"> 
						<input type="text" name="username" value="<?php echo $user['username']?>" required="required" class="form-control"> </td>
					</div> 
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label"> Password </label>
					<div class="col-xs-5"> 
						<input type="password" name="password" value="" required="required" class="form-control"> </td>
					</div> 
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label"> Nama </label>
					<div class="col-xs-5"> 
						<input type="text" name="nama" value="<?php echo $user['nama']?>" required="required" class="form-control"> </td>
					</div> 
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label"> Email </label>
					<div class="col-xs-5"> 
						<input type="email" name="email" value="<?php echo $user['email']?>" required="required" class="form-control"> </td>
					</div> 
				</div>
				
				<div class="form-group">
					<label class="col-sm-2 control-label"> Type </label>
					<div class="col-sm-5">
						<select name="level" class="form-control">
							<option>--pilih type--</option>
							<?php if($user['level']=='1') {
							echo "<option value=1 selected> Administrator</option>";
							echo "<option value=2>User</option>";
							 }
							 if($user['level']=='2') {
							 echo "<option value=2 selected>User</option>";
							echo "<option value=1>Administrator</option>";
							 } ?>
							
							
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label"> Photo </label>
					<div class="col-sm-5"> 
					<img src="images/<?php echo $user['photo'] ?>" width=150 height=150> <br><br>
						<input type="text" name="photo" class="form-control" value="<?php echo $user['photo']; ?>">
						<input type="file" name="img_ubah" class="form-control">
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
