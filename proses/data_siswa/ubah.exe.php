<?php
include '../../config/config.php';

$id = $_POST['id_siswa'];
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

 $fileName = $_FILES['gambar']['name'];  
 $fileSize = $_FILES['gambar']['size'];  
 $fileError = $_FILES['gambar']['error'];  
 if($fileSize > 0 || $fileError == 0){  
 $move = move_uploaded_file($_FILES['gambar']['tmp_name'], '../../images/'.$fileName);  
 if($move){  
 echo "File sudah diupload";  
 }else{  
 echo "Gagal mengupload file";  
 }  
 }else{  
 echo "Gagal mengupload file: ".$fileError;  
 }  

mysql_query("UPDATE data_siswa set nis = '$nis',
										nama_siswa = '$nama',
										jenis_kelamin = '$jenkel',
										id_agama = '$agama',
										tempat_lahir = '$tmp_lahir',
										tanggal_lahir = '$tgl_lahir',
										alamat = '$alamat',
										id_sekolah = '$id_sklh',
										id_pembimbing = '$id_pembimbing',
										id_prog_keahlian = '$id_prog',
										periode_pkl = '$hasil',
										photo = '$fileName' WHERE id_siswa = '$id'") or die(mysql_error());

mysql_query("UPDATE periode_pkl set nis = '$nis',
									tgl_masuk = '$tgl_masuk',
									tgl_keluar = '$tgl_keluar' where nis = '$nis'") or die (mysql_error());

header ("location:../../index.php?pages=list_siswa");

?>
