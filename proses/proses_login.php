<?php
session_start();
include "../config/config.php";
function anti_injection($data){
  $filter = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
  return $filter;
}

$username = htmlentities($_POST['user']);
$pass     = htmlentities(md5($_POST['pass']));

// pastikan username dan password adalah berupa huruf atau angka.
if (!ctype_alnum($username) OR !ctype_alnum($pass)){
    echo "didie" ;
}
else{
$login=mysql_query("SELECT * FROM user WHERE username='$username' AND password='$pass'");
$ketemu=mysql_num_rows($login);
$r=mysql_fetch_array($login);

// Apabila username dan password ditemukan
if ($ketemu > 0){

  $_SESSION['username']    = $r['username'];
  $_SESSION['password']    = $r['password'];
  $_SESSION['level']	   = $r['level'];
  $_SESSION['nama']        = $r['nama'];
  $_SESSION['id_user']     = $r['id_user'];
  $_SESSION['email']       = $r['email'];
  
  // session timeout

  header("location:../index.php?pages=dash");
}
else{
  header("location:../login.php");
}
}
echo $username ; 
echo $pass;
?>

