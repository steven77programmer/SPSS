<?php
session_start();
$con = mysqli_connect('sql112.infinityfree.com','if0_34419009','dCXhuPfmbSMj','if0_34419009_spss_db');
 $rno=$_POST['rno'];
$cid=$_POST['cid'];
$email=$_POST['mai'];
//$reg=$_POST['reg'];
$res=mysqli_query($con,"SELECT * FROM student WHERE control_id='$cid'");
$count=mysqli_num_rows($res);
if($count>0){
   // mysqli_query($con,"UPDATE `student` SET ``='$pas' WHERE control_id='$cid'");
    mysqli_query($con,"UPDATE `student` SET `roll_no`='$rno' WHERE control_id='$cid'");
    mysqli_query($con,"UPDATE `student` SET `email`='$email' WHERE control_id='$cid'");
  //  mysqli_query($con,"UPDATE `student` SET `email`='$email' WHERE roll_no='$rno'");
   echo("P");//existing username
}
else{
    echo "NF";
}

?>