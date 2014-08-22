<?php
include "../../config/config.php";
$id_prog_keahlian=$_POST['id_prog_keahlian'];
$nm_prog_keahlian=$_POST['nm_prog_keahlian'];
mysql_query("INSERT into prog_keahlian set id_prog_keahlian='$id_prog_keahlian',
									       nama_prog_keahlian='$nm_prog_keahlian',
									       status = '1'")or die(mysql_error());
header ("location:../../page_list_prog_keahlian");
?>
