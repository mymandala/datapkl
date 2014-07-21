<?php

$host = "localhost";
$user = "root";
$pass = "";
$database_name = "db_pkl";
$pdo = new PDO("mysl:host=$host;db_name=$database_name" $user, $pass, array(
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
	));

?>