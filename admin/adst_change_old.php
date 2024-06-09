<?php
session_start();
$con = mysqli_connect('sql112.infinityfree.com','if0_34419009','dCXhuPfmbSMj','if0_34419009_spss_db');
$use=$_POST['use'];
 $rno=$_POST['rno'];
$cid=$_POST['cid'];
$email=$_POST['mai'];
//$reg=$_POST['reg'];
// $res=mysqli_query($con,"SELECT * FROM stud_account WHERE control_id='$cid'");
// $count=mysqli_num_rows($res);
// if($count>0){
   // mysqli_query($con,"UPDATE `student` SET ``='$pas' WHERE control_id='$cid'");
//     mysqli_query($con,"UPDATE `stud_account` SET `roll_no`='$rno' WHERE control_id='$cid'");
//     mysqli_query($con,"UPDATE `stud_account` SET `email`='$email' WHERE control_id='$cid'");
//   //  mysqli_query($con,"UPDATE `student` SET `email`='$email' WHERE roll_no='$rno'");
//    echo("P");//existing username
$res=mysqli_query($con,"SELECT * FROM stud_account WHERE stu_username='$use'");
$count=mysqli_num_rows($res);
if($count>0){
 
    $ress1=mysqli_query($con,"SELECT * FROM stud_account WHERE stu_controlid='$cid'");
    $countt1=mysqli_num_rows($ress1);
    $ress2=mysqli_query($con,"SELECT * FROM stud_account WHERE stu_rollno='$rno'");
    $countt2=mysqli_num_rows($ress2);
    $ress3=mysqli_query($con,"SELECT * FROM stud_account WHERE stu_email='$email'");
    $countt3=mysqli_num_rows($ress3);
    $ress4=mysqli_query($con,"SELECT * FROM student WHERE control_id='$cid'");
    $countt4=mysqli_num_rows($ress4);
    $ress5=mysqli_query($con,"SELECT * FROM student WHERE roll_no='$rno'");
    $countt5=mysqli_num_rows($ress5);
    $ress6=mysqli_query($con,"SELECT * FROM student WHERE email='$email'");
    $countt6=mysqli_num_rows($ress6);
   if($countt1>0){
     echo "CU";   
   }
//    else if($countt2>0){
//     echo "RU";  
//   }
//   else if($countt3>0){
//     echo "MU";  
//   }
//    else if($countt4==0){
//     echo "invalidc";  
//   }
   else if($countt5==0){
    echo "invalidr";  
  }
   else if($countt6==0){
    echo "invalide";  
  }
   else{
    // mysqli_query($con,"INSERT INTO `stud_account`(`stu_username`, `stu_email`, `stu_password`, `public_username`, `stu_controlid`, `stu_rollno`) VALUES ('$use','$email','$pas','$puse','$cid','$rno')");
    // mysqli_query($con,"UPDATE `student` SET `registered_no`='$head' WHERE control_id='$cid'");
    // mysqli_query($con,"INSERT INTO `session_tb`(`sess_username`, `sess_userstatus`) VALUES ('$use','inactive')");
    mysqli_query($con,"UPDATE `student` SET ``='$pas' WHERE control_id='$cid'");
    mysqli_query($con,"UPDATE `stud_account` SET `roll_no`='$rno' WHERE control_id='$cid'");
    mysqli_query($con,"UPDATE `stud_account` SET `email`='$email' WHERE control_id='$cid'");
   mysqli_query($con,"UPDATE `student` SET `email`='$email' WHERE roll_no='$rno'");
    echo "P";
   }
}

// else{
//     echo "NF";
// }

?>