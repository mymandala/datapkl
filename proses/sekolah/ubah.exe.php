<?php
include "../../config/config.php";
$id_sekolah=$_POST['id_sekolah'];
$nm_sekolah=$_POST['nm_sekolah'];
$alamat_sekolah=$_POST['alamat_sekolah'];
$email_sekolah=$_POST['email_sekolah'];
$telp_sekolah=$_POST['telp_sekolah'];
$kpl = $_POST['kpl_sekolah'];
$nip = $_POST['nip'];
mysql_query("UPDATE sekolah set s_nama='$nm_sekolah',
								s_alamat='$alamat_sekolah',
								s_email='$email_sekolah',
								s_telp='$telp_sekolah',
								kpl_sekolah = '$kpl',
								nip = '$nip' where id_sekolah='$id_sekolah'")or die(mysql_error());

echo "<meta http-equiv='refresh' content='0; url=../../index.php?pages=list_sekolah'>";
?>
