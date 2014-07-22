<?php
include '../../config/config.php';

$id_p = $_POST['id_pembimbing'];
$nama = $_POST['p_nama'];
$email = $_POST['p_email'];
$telp = $_POST['p_telp'];
$id_sklh = $_POST['id_sekolah'];

$sql = "UPDATE pembimbing set
									p_nama = '$nama',
									p_email = '$email',
									p_telp = '$telp',
									id_sekolah = '$id_sklh' where id_pembimbing = '$id_p'";
mysql_query($sql);
header("location:../../index.php?pages=pembimbing");

?>