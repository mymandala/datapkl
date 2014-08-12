<div class="page-header"> <h3> Data User </h3> </div>
<div class="col-lg-12">
    <div class="well"  style="font-size:17px;">
        <p>
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
					<td> level </td>
					<td> : </td>
					<td> <?php if ($row['level']=='1') {
							echo "Administrator";
							} else { echo "User"; } ?>
					</td>
				</tr>
			</table>
		</div>
		<div align="center">
			<a href="index.php?pages=list_user"> <input type="button" value="Kembali" class="btn btn-primary"> </a>
		</div>
		</p>
	</div> 
</div>