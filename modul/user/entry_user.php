<html>
<head>
<title>Entry User</title>
</head>
<body>
<h3> Tambah Data Siswa PKL </h3>
<br>
	<form action="proses/user/input.php" method="post" class="form-horizontal" role="form">
		<div class="form-group">
			<label class="col-sm-2 control-label"> Id User </label>
			<div class="col-xs-2"> 
				<input type="text" name="id_user" required="required" class="form-control"> </td>
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
				<input type="text" name="email" required="required" class="form-control"> </td>
			</div> 
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label"> Username </label>
			<div class="col-xs-5"> 
				<input type="text" name="username" required="required" class="form-control"> </td>
			</div> 
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label"> Password </label>
			<div class="col-xs-5"> 
				<input type="text" name="password" required="required" class="form-control"> </td>
			</div> 
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label"> Type </label>
			<div class="col-sm-5">
				<select name="level" class="form-control">
					<option>--pilih type--</option>
					<option value="administrator">administrator</option>
					<option value="user">user</option>
				</select>
			</div>
		</div>
		<div class="form-group"></div>
		<input type="submit" value="kirim" class="btn btn-primary">
		<a href="index.php?pages=data_user"> <input type="button" value="batal" class="btn btn-primary"> </a>
	</form>
</body>
</html>