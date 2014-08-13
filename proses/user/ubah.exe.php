<?
include "../../config/config.php";
$id_user = $_POST['id_user'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$nama = $_POST['nama'];
$email = $_POST['email'];
$level = $_POST['level'];

mysql_query("UPDATE user set username='$username',
								  password='$password',
								  nama='$nama',
								  email='$email',
								  level='$level'
 								  where id_user='$id_user'")or die(mysql_error());

echo "<meta http-equiv='refresh' content='0; url=../../index.php?pages=profil_user'>";
?>
