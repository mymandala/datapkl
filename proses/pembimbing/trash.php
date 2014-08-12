<?php

	include "../../config/config.php";
	$id = $_GET['id_pembimbing'];
	$query  = "UPDATE pembimbing SET status = '0' WHERE id_pembimbing = '$id'";
	mysql_query($query);
	header("location:../../index.php?pages=list_pembimbing");
?>