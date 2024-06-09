<?php
session_start();
$con = mysqli_connect('sql112.infinityfree.com','if0_34419009','dCXhuPfmbSMj','if0_34419009_spss_db');
$cid=$_POST['control_id'];
$rno=$_POST['roll_no'];
$email=$_POST['e_mail'];
// $use=$_POST['use'];
// $pas=$_POST['pas'];
$head = mt_rand(1, 10000);
$headstr = strval($head);

// $sarr = str_split($headstr);
// for ($i = 0; $i < strlen($headstr); $i++) {
//     $sarr[$i] = chr(ord($headstr[$i]) + 30);
// }

// $str = implode('', array_reverse($sarr));
// $sarr = str_split($use);
// for ($i = 0; $i < strlen($use); $i++) {
//     $sarr[$i] = chr(ord($use[$i]) + 5);
// }

// $str = $str . implode('', array_reverse($sarr));
// $str1 = substr($str, 0, strlen($str) / 2);
// $str2 = substr($str, strlen($str) / 2);
// $str = $str2 . $str1;
// $puse=$str;
// $res=mysqli_query($con,"SELECT * FROM stud_account WHERE stu_username='$use'");
// $count=mysqli_num_rows($res);
// if($count>0){
//     echo "EUEU";//existing username
// }
// else{
    $ress1=mysqli_query($con,"SELECT * FROM stud_account WHERE stu_controlid='$cid'");
    $countt1=mysqli_num_rows($ress1);
    $ress2=mysqli_query($con,"SELECT * FROM stud_account WHERE stu_rollno='$rno'");
    $countt2=mysqli_num_rows($ress2);
    $ress3=mysqli_query($con,"SELECT * FROM stud_account WHERE stu_email='$email'");
    $countt3=mysqli_num_rows($ress3);
   if($countt1>0){
     echo "CU";   
   }
   else if($countt2>0){
    echo "RU";  
  }
  else if($countt3>0){
    echo "MU";  
  }
   else{
    // mysqli_query($con,"INSERT INTO `stud_account`(`stu_username`, `stu_email`, `stu_password`, `public_username`, `stu_controlid`, `stu_rollno`) VALUES ('$use','$email','$pas','$puse','$cid','$rno')");
    mysqli_query($con,"INSERT INTO `student`(`control_id`, `roll_no`, `email`, `registered_no`) VALUES ('$cid','$rno','$email',null)");
    echo "NU";
   }
// }
?>