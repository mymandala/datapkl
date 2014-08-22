<?php
include "../../config/config.php";
$id_prog_keahlian = $_GET['id_prog_keahlian'];
mysql_query("DELETE from prog_keahlian  where id_prog_keahlian = $id_prog_keahlian")or die(mysql_error());
echo "<meta http-equiv='refresh' content='0; url=../../page_trash_prog_keahlian'>";
?>