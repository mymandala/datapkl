<?php

	include "../../config/config.php";
	$id = $_GET['id_prog_keahlian'];
	$query  = "UPDATE prog_keahlian SET status = '0' WHERE id_prog_keahlian = '$id'";
	mysql_query($query);
	header("location:../../index.php?pages=trash_prog_keahlian");
?>