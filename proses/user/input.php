<?
include "../../config/config.php";

$username=$_POST['username'];
$password=md5($_POST['password']);
$nama=$_POST['nama'];
$email=$_POST['email'];
$level=$_POST['level'];
mysql_query("INSERT into user set username='$username',
								  password = '$password',
								  nama='$nama',
								  email='$email',
								  level='$level',
								  status = '1'")or die(mysql_error());
header ("location:../../index.php?pages=list_user");
?>
