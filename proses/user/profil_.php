<?php
	$query 		= "SELECT * FROM user where id_user='$_SESSION[id_user]'";
	$sql		= mysql_query($query);
	$row		= mysql_fetch_array($sql);
?>

<table>
	<tr>
		<td width="200"> Id user </td>
		<td> <?php echo $row['id_user']; ?> </td>
	</tr>
	<tr>
		<td width="200"> Nama </td>
		<td> <?php echo $row['nama']; ?> </td>
	<tr>
		<td width="200"> E-mail </td>
		<td> <?php echo $row['email'];?> </td>
	</tr>
	<tr>
		<td width="200"> Level </td>
		<td> <?php echo $row['level']; ?> </td>
	</tr>
</table>