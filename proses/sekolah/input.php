<?php
include "../../config/config.php";
$id_sekolah=$_POST['id_sekolah'];
$nm_sekolah=$_POST['nm_sekolah'];
$alamat_sekolah=$_POST['alamat_sekolah'];
$email_sekolah=$_POST['email_sekolah'];
$telp_sekolah=$_POST['telp_sekolah'];
mysql_query("INSERT into sekolah set id_sekolah='$id_sekolah',
									 s_nama='$nm_sekolah',
									 s_alamat='$alamat_sekolah',
									 s_email='$email_sekolah',
									 s_telp='$telp_sekolah'")or die(mysql_error());

header ("location:../../index.php?pages=list_sekolah");
?>