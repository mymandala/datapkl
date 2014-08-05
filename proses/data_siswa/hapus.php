<?php
	include '../../config/config.php';
	$nis = $_GET['nis'];
	mysql_query("DELETE from data_siswa where nis = '$nis'");
	header("location:../../index.php?pages=data_siswa");
?>