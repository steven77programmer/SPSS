<?php
session_start();
$con = mysqli_connect('sql112.infinityfree.com','if0_34419009','dCXhuPfmbSMj','if0_34419009_spss_db');
$otp=$_POST['otp'];
$email=$_SESSION['EMAIL'];
$res=mysqli_query($con,"SELECT * FROM mailotp_tb WHERE omail='$email' and otp='$otp'");
$count=mysqli_num_rows($res);
if($count>0){
    mysqli_query($con,"DELETE FROM `mailotp_tb` WHERE omail='$email'");
    echo "yess";
}
else{
    echo "not_exit";
}
?>