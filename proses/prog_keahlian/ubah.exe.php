<?
include "../../config/config.php";
$id_prog_keahlian=$_POST['id_prog_keahlian'];
$nm_prog_keahlian=$_POST['nm_prog_keahlian'];
mysql_query("UPDATE prog_keahlian set nama_prog_keahlian='$nm_prog_keahlian' where id_prog_keahlian='$id_prog_keahlian'")or die(mysql_error());

echo "<meta http-equiv='refresh' content='0; url=../../index.php?pages=data_prog_keahlian'>";
?>
