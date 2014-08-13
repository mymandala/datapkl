<?php 
$host   = "192.168.5.214";
$user   = "root" ;
$pass   = "wortel45" ;
$db_name = "db_pkl";

	mysql_connect("$host","$user","$pass") or die(mysql_error("koneksi tidak bisa"))  ;
	mysql_select_db("$db_name") or die(mysql_error("databases tidak di temukan"));

?>