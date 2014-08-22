<?php
	include '../../config/config.php';
	$nis = $_GET['nis'];
	mysql_query("DELETE from periode_pkl where nis = '$nis'");
	mysql_query("DELETE from data_siswa where nis = '$nis'");
	header("location:../../page_trash_siswa");
?>