<html>
<head>
<title>Data Sekolah</title>
</head>
<body>
<table border="1">
<tr>
	<td> No </td>
	<td> Nis </td>
	<td> Sekolah/Universitas</td>
	<td> Tanggal Masuk </td>
	<td> Tanggal Keluar</td>
	<td> Periode PKL </td>
	<td colspan="2">action</td>
</tr>
<?php
$i =1;
$qry = mysql_query("SELECT * FROM tampil_lengkap");
while ($laporan_taun = mysql_fetch_array($qry))
{ ?>
<tr>
	<td><?php echo $i++; ?> </td>
	<td><?php echo $laporan_taun['nis']?></td>
	<td><?php echo $laporan_taun['nama_siswa']?></td>
	<td><?php echo $laporan_taun['s_nama']?></td>
	<td><?php echo $laporan_taun['tgl_masuk']?></td>
	<td><?php echo $laporan_taun['tgl_keluar']?></td>
	<td><?php echo $laporan_taun['periode_pkl']?></td>
	<td><a href="index.php?pages=view_laporan&nis=<?php echo $laporan_taun['nis'];?>"> Lihat </a>
        </a>
    </td>
</tr>
<?php } ?>
</table>
</body>
</html>