<?php
session_start();
$con = mysqli_connect('sql112.infinityfree.com','if0_34419009','dCXhuPfmbSMj','if0_34419009_spss_db');
$use=$_POST['use'];
$res=mysqli_query($con,"SELECT * FROM admin WHERE admin_username='$use'");
$count=mysqli_num_rows($res);
if($count>0){
    mysqli_query($con,"DELETE FROM `admin` WHERE admin_username='$use'");
   echo("P");//existing username
}
else{
    echo "NF";
}
?>