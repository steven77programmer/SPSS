<?php
session_start();
$con = mysqli_connect('sql112.infinityfree.com','if0_34419009','dCXhuPfmbSMj','if0_34419009_spss_db');
$cid=$_POST['cid'];
$res=mysqli_query($con,"SELECT * FROM `student` WHERE control_id='$cid'");
$count=mysqli_num_rows($res);
// $cid=implode('',mysqli_fetch_row($res));
if($count>0){
    mysqli_query($con,"DELETE FROM `student` WHERE control_id='$cid'");
    // mysqli_query($con,"DELETE FROM `post` WHERE post_username='$use'");
    // mysqli_query($con,"UPDATE `student` SET `registered_no`=null WHERE control_id='$cid'");
   echo("P");//existing username
}
else{
    echo "NF";
}
?>