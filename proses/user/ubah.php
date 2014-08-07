<?php 
$id_user= $_GET['id_user'];
$sql="SELECT * from user where id_user='$id_user'";
$query = mysql_query($sql);
$user = mysql_fetch_array($query);
?>
<form action="proses/user/ubah.exe.php" method="post">
<table>
	<tr>
		<td>Id_User</td>
		<td>:</td>
		<td><input type="text" name="id_user" value="<?php echo $user['id_user']?>"></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="text" name="nama" value="<?php echo $user['nama']?>"></td>
	</tr>
	<tr>
		<td>Email</td>
		<td>:</td>
		<td><input type="text" name="email" value="<?php echo $user['email']?>"></td>
	</tr>
	<tr>
		<td>Username</td>
		<td>:</td>
		<td><input type="text" name="username" value="<?php echo $user['username']?>"></td>
	</tr>
	<tr>
		<td>Email</td>
		<td>:</td>
		<td><input type="text" name="username" value="<?php echo $user['username']?>"></td>
	</tr>
	<tr>
		<td>Type</td>
		<td>:</td>
		<td>
			<select>
				<option>--Pilih Type--</option>
				<option>Administrator</option>
				<option>User</option>
			</select>
		</td>
	</tr>
	</table>
	<input type="submit" value="kirim" >

</form>