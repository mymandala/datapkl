<?
include "../../config/config.php";
$id_user = $_GET['id_user'];
mysql_query("DELETE from user  where id_user = $id_user")or die(mysql_error());
echo "<meta http-equiv='refresh' content='0; url=../../index.php?pages=list_user'>";
?>