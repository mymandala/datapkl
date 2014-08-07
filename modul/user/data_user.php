<table style="margin:10px;" width="1000">
	<tr class="page-header">
		<td width="270" style="font-size:40px;"> <h2> Data User </h2> </td>
		<td> <a href="index.php?pages=entry_user"> <input type="button" value=" + Tambah Data" class="btn btn-primary"></a></td>
	</tr>
</table>
<br>
<table class="table table-hover">
<tr>
	<td>id_User</td>
	<td>Username</td>
	<td>Nama</td>
	<td>Email</td>
	<td>status</td>
	<td colspan="2">action</td>
</tr>
<?
$qry = mysql_query("SELECT * FROM user");
while ($user = mysql_fetch_array($qry)){
?>
<tr>
	<td><?php echo $user['id_user']?></td>
	<td><?php echo $user['username']?></td>
	<td><?php echo $user['nama']?></td>
	<td><?php echo $user['email']?></td>
	<td><?php echo $user['level']?></td>
	<td><a href="proses/user/hapus.php?id_user=<?php echo $user ['id_user']; ?> ">
            <input type="button" value="hapus" name="hapus">
        </a>
    </td>
    <td>
        <a href="index.php?pages=ubah_user&id_user=<?php echo $user ['id_user']; ?> ">
            <input type="button" value="ubah" name="sunting">
        </a>
    </td>
</tr>
<?php }?>
</table>
</body>
</html>