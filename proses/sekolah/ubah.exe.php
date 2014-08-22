<?php
include "../../config/config.php";
$id_sekolah=$_POST['id_sekolah'];
$nm_sekolah=$_POST['nm_sekolah'];
$alamat_sekolah=$_POST['alamat_sekolah'];
$email_sekolah=$_POST['email_sekolah'];
$telp_sekolah=$_POST['telp_sekolah'];
$kpl = $_POST['kpl_sekolah'];
$nip = $_POST['nip'];
$fileName = $_FILES['photo']['name'];  
 $fileSize = $_FILES['photo']['size'];  
 $fileError = $_FILES['photo']['error'];  
 if($fileSize > 0 || $fileError == 0){  
 $move = move_uploaded_file($_FILES['photo']['tmp_name'], '../../images/'.$fileName);  
 if($move){  
 echo "File sudah diupload";  
 }else{  
 echo "Gagal mengupload file";  
 }  
 }else{  
 echo "Gagal mengupload file: ".$fileError;  
 }  
mysql_query("UPDATE sekolah set s_nama='$nm_sekolah',
								s_alamat='$alamat_sekolah',
								s_email='$email_sekolah',
								s_telp='$telp_sekolah',
								kpl_sekolah = '$kpl',
								nip = '$nip',
								photo = '$fileName' where id_sekolah='$id_sekolah'")or die(mysql_error());

echo "<meta http-equiv='refresh' content='0; url=../../page_list_sekolah'>";
?>
