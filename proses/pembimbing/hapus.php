<?php
	include '../../config/config.php';
	$id = $_GET['id_pembimbing'];
	mysql_query("DELETE from pembimbing where id_pembimbing = '$id'");
	header("location:../../page_trash_pembimbing");
?>