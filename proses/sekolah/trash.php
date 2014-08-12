<?php

	include "../../config/config.php";
	$id = $_GET['id_sekolah'];
	$query  = "UPDATE sekolah SET status = '0' WHERE id_sekolah = '$id'";
	mysql_query($query);
	header("location:../../index.php?pages=list_sekolah");
?>