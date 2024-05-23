<?php
session_start();
$con = mysqli_connect('sql112.infinityfree.com','if0_34419009','dCXhuPfmbSMj','if0_34419009_spss_db');
$use=$_POST['use'];
$_SESSION['USERNAME']=$use;
$pas=$_POST['pas'];
$res=mysqli_query($con,"SELECT * FROM stud_account WHERE stu_username='$use'");
$count=mysqli_num_rows($res);
$res2=mysqli_query($con,"SELECT * FROM handler WHERE hand_username='$use'");
$count2=mysqli_num_rows($res2);
$res3=mysqli_query($con,"SELECT * FROM admin WHERE admin_username='$use'");
$count3=mysqli_num_rows($res3);
//$res4=mysqli_query($con,"SELECT sess_userstatus FROM session_tb WHERE sess_username='$use'");
if($count>0){
//$statuss=implode('',mysqli_fetch_row($res4));
$res=mysqli_query($con,"SELECT stu_password FROM stud_account WHERE stu_username='$use'");
$resstr= implode("",(mysqli_fetch_row($res)));
if($resstr!=$pas)
{
    echo "P";//existing username
}
else{
    $_SESSION['IS_LOGIN']=$use;
    mysqli_query($con,"UPDATE `session_tb` SET `sess_userstatus`='active' WHERE sess_username='$use'");
    echo "EU";//existing username
}
}
else if($count2>0){//changes from here
//$statuss=implode('',mysqli_fetch_row($res4));
//if($statuss=="inactive")
//{
$res=mysqli_query($con,"SELECT hand_password FROM handler WHERE hand_username='$use'");
$resstr= implode("",(mysqli_fetch_row($res)));
if($resstr!=$pas)
{
    echo "P";//existing username
}
else{
    $_SESSION['IS_LOGIN']=$use;
    mysqli_query($con,"UPDATE `session_tb` SET `sess_userstatus`='active' WHERE sess_username='$use'");
    echo "EUH";//existing username
}
}
// else if($statuss=="active"){
//     echo "sess";
// }
// else{
//     echo "IN";
// }
//}
else if($count3>0){//changes from here
// $statuss=implode('',mysqli_fetch_row($res4));
// if($statuss=="inactive")
// {
$res=mysqli_query($con,"SELECT admin_password FROM admin WHERE admin_username='$use'");
$resstr= implode("",(mysqli_fetch_row($res)));
if($resstr!=$pas)
{
    echo "P";//existing username
}
else{
    $_SESSION['IS_LOGIN']=$use;
    mysqli_query($con,"UPDATE `session_tb` SET `sess_userstatus`='active' WHERE sess_username='$use'");
    echo "EUA";//existing username
}
// }
// else if($statuss=="active"){
//     echo "sess";
// }
// else{
//     echo "IN";
// }
 }
else{
   echo "NU";
}
?>