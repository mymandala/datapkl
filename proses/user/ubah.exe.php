<?php
include "../../config/config.php";
$id_user=$_POST['id_user'];
$username=$_POST['username'];
$password=md5($_POST['password']);
$nama=$_POST['nama'];
$email=$_POST['email'];
$level=$_POST['level'];
$photo = $_POST['photo'];
$fileName = $_FILES['img_ubah']['name'];  
 $fileSize = $_FILES['img_ubah']['size'];  
 $fileError = $_FILES['img_ubah']['error'];  
 if($fileSize > 0 || $fileError == 0){  
 $move = move_uploaded_file($_FILES['img_ubah']['tmp_name'], '../../images/'.$fileName);  
 if($move){  
 echo "File sudah diupload";  
 }else{  
 echo "Gagal mengupload file";  
 }  
 }else{  
 echo "Gagal mengupload file: ".$fileError;  
 }  
 if (empty($fileName)) {
mysql_query("UPDATE user set username='$username',
								  password = '$password',
								  nama='$nama',
								  email='$email',
								  level='$level',
								  photo='$photo',
								  status = '1' 
								  WHERE id_user='$id_user'")or die(mysql_error());
 }
 if (!empty($fileName)) {
 	mysql_query("UPDATE user set username='$username',
								  password = '$password',
								  nama='$nama',
								  email='$email',
								  level='$level',
								  photo='$fileName',
								  status = '1' 
								  WHERE id_user='$id_user'")or die(mysql_error());
 }
 
header ("location:../../index.php?pages=profil_user");