<?php

	include "../../config/config.php";
	$nis = $_GET['nis'];
	$query  = "UPDATE data_siswa SET status = '1' WHERE nis = '$nis'";
	mysql_query($query);
	header("location:../../page_trash_siswa");
?>