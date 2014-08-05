<html>
<head>
<title>Data Sekolah</title>
</head>
<body>
<a href="index.php?pages=entry_prog_keahlian" >tambah</a>
<table border="1">
	<tr>
		<td>Id Program Keahlian</td>
		<td>Jenis Program Keahlian</td>
		<td colspan="2">action</td>
	</tr>
	<?
$qry = mysql_query("SELECT * FROM prog_keahlian");
while ($jurusan = mysql_fetch_array($qry)){
?>
	<tr>
		<td><?php echo $jurusan['id_prog_keahlian']?></td>
		<td><?php echo $jurusan['nama_prog_keahlian']?></td>
		<td><a href="proses/prog_keahlian/hapus.php?id_prog_keahlian=<?php echo $jurusan ['id_prog_keahlian']; ?> ">
	            <input type="button" value="hapus" name="hapus">
	        </a>
	    </td>
	    <td>
	        <a href="index.php?pages=ubah_prog_keahlian&id_prog_keahlian=<?php echo $jurusan ['id_prog_keahlian']; ?> ">
	            <input type="button" value="ubah" name="sunting">
	        </a>
	    </td>
	</tr>
<? } ?>
</table>
</body>
</html>
	
