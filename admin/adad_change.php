<?php
session_start();
$con = mysqli_connect('sql112.infinityfree.com','if0_34419009','dCXhuPfmbSMj','if0_34419009_spss_db');
$use=$_POST['use'];
$email=$_POST['mai'];
//$pas=$_POST['pas'];
$res=mysqli_query($con,"SELECT * FROM admin WHERE admin_username='$use'");
$count=mysqli_num_rows($res);
if($count>0){
  //  mysqli_query($con,"UPDATE `admin` SET `admin_password`='$pas' WHERE admin_username='$use'"); 
    mysqli_query($con,"UPDATE `admin` SET `admin_email`='$email' WHERE admin_username='$use'");
   echo("P");//existing username
}
else{
    echo "NF";
}
?>