<?php
session_start();
//$con=mysqli_connect('127.0.0.1','SPSS_admin','Php_54321$','spss_db');
$con=mysqli_connect('sql112.infinityfree.com','if0_34419009','dCXhuPfmbSMj','if0_34419009_spss_db');
$use=$_SESSION['USERNAME'];
//mysqli_query($con,"UPDATE `session_tb` SET `sess_userstatus`='inactive' WHERE sess_username='$use'");
unset($_SESSION['IS_LOGIN']);
unset($_SESSION['EMAIL']);
unset($_SESSION['USERNAME']);
header('location:home.php');
die();
?>