<?
include "../../config/config.php";
$id_sekolah = $_GET['id_sekolah'];
mysql_query("delete from sekolah  where id_sekolah = $id_sekolah")or die(mysql_error());
echo "<meta http-equiv='refresh' content='0; url=../../index.php?pages=data_sekolah'>";
?>