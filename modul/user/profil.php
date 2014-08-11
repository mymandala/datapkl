<h2 align="center"> Data Siswa PKL </h2>
	<div class="alert alert-info" role="alert" align="center" style="font-size:17px;">
	<?php
	$query 		= "SELECT * FROM user where id_user='$_SESSION[id_user]'";
	$sql		= mysql_query($query);
	$row		= mysql_fetch_array($sql);
	?>
		<table width="500">
				<tr>
					<td> Id User </td>
					<td width="30"> : </td>
					<td> <?php echo $row['id_user']; ?> </td>
				</tr>
				<tr>
					<td> Nama </td>
					<td> : </td>
					<td> <?php echo $row['nama']; ?> </td>
				</tr>
				<tr>
					<td> User Name </td>
					<td> : </td>
					<td> <?php echo $row['username']; ?> </td>
				</tr>
				<tr>
					<td> Email </td>
					<td> : </td>
					<td> <?php echo $row['email']; ?> </td>
				</tr>
				<tr>
					<td> Password </td>
					<td> : </td>
					<td> <?php echo $row['password']; ?> </td>
				</tr>
				<tr>
					<td> level </td>
					<td> : </td>
					<td> <?php echo $row['level']; ?> </td>
				</tr>
			</table>
		</div>
		<div align="center">
			<a href="index.php?pages=list_user"> <input type="button" value="Kembali" class="btn btn-primary"> </a>
		</div>