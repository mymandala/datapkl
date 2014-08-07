<html>
<head>
<title>Entry User</title>
</head>
<body>

<form action="proses/user/input.php" method="post">
<table>
	<tr>
		<td>Id_User</td>
		<td>:</td>
		<td><input type="text" name="id_user"></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="text" name="nama"></td>
	</tr>
	<tr>
		<td>Email</td>
		<td>:</td>
		<td><input type="text" name="email"></td>
	</tr>
	<tr>
		<td>Username</td>
		<td>:</td>
		<td><input type="text" name="username"></td>
	</tr>
	<tr>
		<td>Password</td>
		<td>:</td>
		<td><input type="text" name=""></td>
	</tr>
	<tr>
		<td>Confirm Password</td>
		<td>:</td>
		<td><input type="text" name="password"></td>
	</tr>
	<tr>
		<td>Type</td>
		<td>:</td>
		<td><select name="level">
				<option>--Pilih Type--</option>
				<option value="administrator">Administrator</option>
				<option value="user">User</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>
	            <input type="submit" name="simpan" value="simpan">
	    </td>
	    
	</tr>
</table>
</form>
</body>
</html>