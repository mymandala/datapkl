<?php
include "../../config/config.php";
$id_user=$_POST['id_user'];
$username=$_POST['username'];
$password=md5($_POST['password']);
$nama=$_POST['nama'];
$email=$_POST['email'];
$level=$_POST['level'];
$fileName = $_FILES['gambar']['name'];  
 $fileSize = $_FILES['gambar']['size'];  
 $fileError = $_FILES['gambar']['error'];  
 if($fileSize > 0 || $fileError == 0){  
 $move = move_uploaded_file($_FILES['gambar']['tmp_name'], '../../images/'.$fileName);  
 if($move){  
 echo "File sudah diupload";  
 }else{  
 echo "Gagal mengupload file";  
 }  
 }else{  
 echo "Gagal mengupload file: ".$fileError;  
 }  
mysql_query("UPDATE user set username='$username',
								  password = '$password',
								  nama='$nama',
								  email='$email',
								  level='$level',
								  photo='fileName'
								  where id_user='$id_user'")or die(mysql_error());
header ("location:../../index.php?pages=list_user");
?>
