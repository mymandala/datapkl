<?php
include '../../config/config.php';

$id = $_POST['id_pembimbing'];
$nama = $_POST['p_nama'];
$email = $_POST['p_email'];
$telp = $_POST['p_telp'];
$id_sklh = $_POST['id_sekolah'];

mysql_query("INSERT into pembimbing set id_pembimbing = '$id',
										p_nama = '$nama',
										p_email = '$email',
										p_telp = '$telp',
										id_sekolah = '$id_sklh',
										status = '1'") or die(mysql_error());
header ("location:../../page_list_pembimbing");

?>
