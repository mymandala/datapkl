<html>
<head>
<title>Data Sekolah</title>
</head>
<body>
<a href="index.php?pages=entry_data_sekolah" >tambah</a>
<table border="1">
<tr>
	<td>id_sekolah</td>
	<td>Nama_sekolah</td>
	<td>Alamat_sekolah</td>
	<td>Email_sekolah</td>
	<td>Telp_sekolah</td>
	<td colspan="2">action</td>
</tr>
<?
$qry = mysql_query("SELECT * FROM sekolah");
while ($sekolah = mysql_fetch_array($qry)){
?>
<tr>
	<td><?php echo $sekolah['id_sekolah']?></td>
	<td><?php echo $sekolah['s_nama']?></td>
	<td><?php echo $sekolah['s_alamat']?></td>
	<td><?php echo $sekolah['s_email']?></td>
	<td><?php echo $sekolah['s_telp']?></td>
	<td><a href="proses/sekolah/hapus.php?id_sekolah=<?php echo $sekolah ['id_sekolah']; ?> ">
            <input type="button" value="hapus" name="hapus">
        </a>
    </td>
    <td>
        <a href="index.php?pages=ubah_data_sekolah&id_sekolah=<?php echo $sekolah ['id_sekolah']; ?> ">
            <input type="button" value="ubah" name="sunting">
        </a>
    </td>
</tr>
<?php }?>
</table>
</body>
</html>