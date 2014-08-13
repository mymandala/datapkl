<?php
	include '../../config/config.php';
	$id = $_GET['id_siswa'];
	mysql_query("DELETE from data_siswa where id_siswa = '$id'");
	header("location:../../index.php?pages=trash_siswa");
?>