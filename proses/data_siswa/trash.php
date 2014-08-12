<?php
	$nis = $_GET['nis'];
	$query  = "UPDATE data_siswa SET status = '0' WHERE nis = '$nis'";
	mysql_query($query);
	echo $query;
	//header("location:../../index.php?pages=list_siswa");
?>