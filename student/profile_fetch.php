<?php
session_start();
$con = mysqli_connect('sql112.infinityfree.com','if0_34419009','dCXhuPfmbSMj','if0_34419009_spss_db');
$use=$_POST['use'];
$res=mysqli_query($con,"SELECT * FROM stud_account WHERE stu_username='$use'");
$count=mysqli_num_rows($res);
if($count>0){
    $res=mysqli_query($con,"SELECT stu_controlid FROM stud_account WHERE stu_username='$use'");
    $mycid= implode("",(mysqli_fetch_row($res)));
    $res=mysqli_query($con,"SELECT stu_rollno FROM stud_account WHERE stu_username='$use'");
    $myrno= implode("",(mysqli_fetch_row($res)));
    $res=mysqli_query($con,"SELECT stu_email FROM stud_account WHERE stu_username='$use'");
    $mymai= implode("",(mysqli_fetch_row($res)));
    $res=mysqli_query($con,"SELECT stu_password FROM stud_account WHERE stu_username='$use'");
    $mypas= implode("",(mysqli_fetch_row($res)));
$data=implode(" ",array($mycid,$myrno,$mymai,$mypas));
    echo $data;//existing username
}
else{
    echo "NF";
}
?>