<?php
include '../../config/config.php';

$nis = $_POST['nis'];
$nama = $_POST['nama_siswa'];
$jenkel = $_POST['jenis_kelamin'];
$agama = $_POST['id_agama'];
$tmp_lahir = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['tanggal_lahir'];
$alamat = $_POST['alamat'];
$id_sklh = $_POST['id_sekolah'];
$id_pembimbing = $_POST['id_pembimbing'];
$id_prog = $_POST['id_prog_keahlian'];
$tgl_masuk = $_POST['tgl_masuk'];
$tgl_keluar = $_POST['tgl_keluar'];
$datetime1 = date_create($_POST['tgl_masuk']);
$datetime2 = date_create($_POST['tgl_keluar']);
$interval = date_diff($datetime1, $datetime2);
$hasil = $interval->format('%m Bulan');

mysql_query("INSERT into data_siswa set nis = '$nis',
										nama_siswa = '$nama',
										jenis_kelamin = '$jenkel',
										id_agama = '$agama',
										tempat_lahir = '$tmp_lahir',
										tanggal_lahir = '$tgl_lahir',
										alamat = '$alamat',
										id_sekolah = '$id_sklh',
										id_pembimbing = '$id_pembimbing',
										id_prog_keahlian = '$id_prog',
										periode_pkl = '$hasil'") or die(mysql_error());

mysql_query("INSERT into periode_pkl set nis = '$nis',
										 tgl_masuk = '$tgl_masuk',
										 tgl_keluar = '$tgl_keluar'") or die (mysql_error());

header ("location:../../index.php?pages=data_siswa");

?>
