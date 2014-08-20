<?php
	include '../../config/config.php';
	$nis = $_GET['nis'];
	mysql_query("DELETE from tampil_lengkap where nis = '$nis'");
	header("location:../../modul/laporan_pertahun/laporan_pertahun.php");
?>