<?php

	include "../../config/config.php";
	$id = $_GET['id_siswa'];
	$query  = "UPDATE data_siswa SET status = '1' WHERE id_siswa = '$id'";
	mysql_query($query);
	header("location:../../index.php?pages=trash_siswa");
?>