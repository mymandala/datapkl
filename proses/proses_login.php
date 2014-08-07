<?php
Include "../config/config.php";

if ($_POST['login']) {
$username=$_POST['user'];
$password=md5($_POST['pass']);

    $query = "SELECT username, password FROM user WHERE username='$username'";
    $sql   = mysql_query($query);
    $fetch = mysql_fetch_array($sql);
           
            $usr = $fetch['username'];
            $pss = $fetch['password'];

            if($usr==$username AND $pss==$password) {
                session_start();

                    $_SESSION['username'] = $usr;
                    $_SESSION['password'] = $pss;
            header ("location:../index.php");
            }
            else { echo "<meta http-equiv='refresh' content='0; url=../login.php'>";
                    }
                    }

?>
