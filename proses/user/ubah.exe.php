<?
include "../../config/config.php";
$id_prog_keahlian=$_POST['id_prog_keahlian'];
$nm_prog_keahlian=$_POST['nm_prog_keahlian'];
mysql_query("UPDATE user set username='$username',
								  password='$password',
								  nama='$nama',
								  email='$email',
								  level='$level'
 								  where id_user='$id_user'")or die(mysql_error());

echo "<meta http-equiv='refresh' content='0; url=../../index.php?pages=list_user'>";
?>
