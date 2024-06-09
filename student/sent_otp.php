<?php
//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;
// require 'vendor/autoload.php';
session_start();
$con = mysqli_connect('sql112.infinityfree.com','if0_34419009','dCXhuPfmbSMj','if0_34419009_spss_db');
if(mysqli_connect_errno())
{
    die("Not connected");
}
 $email = mysqli_real_escape_string($con,$_POST['e_mail']);
$res=mysqli_query($con,"SELECT * FROM student WHERE email='$email'");
$count=mysqli_num_rows($res);
if($count>0){
    $otp=rand(111111,999999);
   $msg='This is your OTP '.$otp;
    $to=$email;
    $subject='OTP';
    $_SESSION['EMAIL']=$email;
    mysqli_query($con,"INSERT INTO `mailotp_tb`(`omail`, `otp`) VALUES ('$email','$otp')");
    echo strval($otp)."^".$msg."^".$to."^".$subject;
}
else{
    echo "not_exist";
}
?>