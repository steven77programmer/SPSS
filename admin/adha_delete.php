<?php
session_start();
$con = mysqli_connect('sql112.infinityfree.com','if0_34419009','dCXhuPfmbSMj','if0_34419009_spss_db');
$use=$_POST['use'];
$res=mysqli_query($con,"SELECT * FROM handler WHERE hand_username='$use'");
$count=mysqli_num_rows($res);
$cid=implode('',mysqli_fetch_row($res));
if($count>0){
    mysqli_query($con,"DELETE FROM `handler` WHERE hand_username='$use'");
    mysqli_query($con,"DELETE FROM `session_tb` WHERE sess_username='$use'");
   echo("P");//existing username
}
else{
    echo "NF";
}
?>