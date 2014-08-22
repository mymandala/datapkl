<?php

	include "../../config/config.php";
	$id = $_GET['id_sekolah'];
	$query  = "UPDATE sekolah SET status = '1' WHERE id_sekolah = '$id'";
	mysql_query($query);
	header("location:../../page_trash_sekolah");
?>