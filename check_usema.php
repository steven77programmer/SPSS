<?php
$con = mysqli_connect('sql112.infinityfree.com','if0_34419009','dCXhuPfmbSMj','if0_34419009_spss_db');
$use=$_POST['use'];
$ema=$_POST['ema'];
$count=0;
$count2=0;

if($use!=''){
$res=mysqli_query($con,"SELECT * FROM stud_account WHERE stu_username='$use'");
$count=mysqli_num_rows($res);
}
else{
    $res2=mysqli_query($con,"SELECT * FROM stud_account WHERE stu_email='$ema'");
$count2=mysqli_num_rows($res2);
}
if($count>0){
//$statuss=implode('',mysqli_fetch_row($res4));
$res=mysqli_query($con,"SELECT * FROM stud_account WHERE stu_username='$use'");
$respas= mysqli_fetch_assoc($res);//implode("",(mysqli_fetch_row($res)));
echo json_encode($respas);
// echo $respas;
}
else if($count2>0){
//$statuss=implode('',mysqli_fetch_row($res4));
$res=mysqli_query($con,"SELECT * FROM stud_account WHERE stu_email='$ema'");
$resema= mysqli_fetch_assoc($res);//implode("",(mysqli_fetch_row($res)));
echo json_encode($resema);
 //echo $resema;
}
else{
   echo json_encode("NU");
}
?>