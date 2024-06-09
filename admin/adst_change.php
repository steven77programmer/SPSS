<?php
session_start();
//$con = mysqli_connect('sql112.infinityfree.com','if0_34419009','dCXhuPfmbSMj','if0_34419009_spss_db');
$con = mysqli_connect('sql112.infinityfree.com','if0_34419009','dCXhuPfmbSMj','if0_34419009_spss_db');
$cid=$_POST['cid'];
$use=$_POST['use'];
 $rno=$_POST['rno'];
$pas=$_POST['pas'];
$email=$_POST['mai'];
//$reg=$_POST['reg'];
$res=mysqli_query($con,"SELECT * FROM stud_account WHERE stu_controlid='$cid'");
$count=mysqli_num_rows($res);
if($count>0){
   // mysqli_query($con,"UPDATE `student` SET ``='$pas' WHERE control_id='$cid'");
//     mysqli_query($con,"UPDATE `stud_account` SET `roll_no`='$rno' WHERE control_id='$cid'");
//     mysqli_query($con,"UPDATE `stud_account` SET `email`='$email' WHERE control_id='$cid'");
//   //  mysqli_query($con,"UPDATE `student` SET `email`='$email' WHERE roll_no='$rno'");
//    echo("P");//existing username
// $res=mysqli_query($con,"SELECT * FROM stud_account WHERE stu_username='$use'");
// $count=mysqli_num_rows($res);
// if($count>0){
 
    
    $ress5=mysqli_query($con,"SELECT * FROM student WHERE roll_no='$rno'");
    $countt5=mysqli_num_rows($ress5);
    $ress6=mysqli_query($con,"SELECT * FROM student WHERE email='$email'");
    $countt6=mysqli_num_rows($ress6);

    if($countt5==0){
    echo "invalidr";  
  }
   else if($countt6==0){
    echo "invalide";  
  }
   else{
    // mysqli_query($con,"INSERT INTO `stud_account`(`stu_username`, `stu_email`, `stu_password`, `public_username`, `stu_controlid`, `stu_rollno`) VALUES ('$use','$email','$pas','$puse','$cid','$rno')");
    // mysqli_query($con,"UPDATE `student` SET `registered_no`='$head' WHERE control_id='$cid'");
    // mysqli_query($con,"INSERT INTO `session_tb`(`sess_username`, `sess_userstatus`) VALUES ('$use','inactive')");
    mysqli_query($con,"UPDATE `student` SET `roll_no`='$rno' WHERE control_id='$cid'");
      mysqli_query($con,"UPDATE `student` SET `email`='$email' WHERE roll_no='$rno'");
    mysqli_query($con,"UPDATE `stud_account` SET `stu_rollno`='$rno' WHERE stu_controlid='$cid'");
    mysqli_query($con,"UPDATE `stud_account` SET `stu_email`='$email' WHERE stu_controlid='$cid'");
     mysqli_query($con,"UPDATE `stud_account` SET `stu_password`='$pas' WHERE stu_controlid='$cid'");
 
    echo "P";
   }
}

else{
    echo "NF";
}

?>