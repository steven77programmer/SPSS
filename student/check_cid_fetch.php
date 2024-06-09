<?php
$con = mysqli_connect('sql112.infinityfree.com','if0_34419009','dCXhuPfmbSMj','if0_34419009_spss_db');
if(mysqli_connect_errno())
{
    die("Not connected");
}
else{
  //  $control_id = mysqli_real_escape_string($con,$_POST['control_id']);
   $control_id = $_POST['control_id'];
    $checking_existing_user = "SELECT * FROM student WHERE control_id = '$control_id'";
    $res = mysqli_query($con,$checking_existing_user);
   

    if(mysqli_num_rows($res)>0)
    {
        //$result_of_existing_userstr= implode("",(mysqli_fetch_row($result_of_existing_user)));
        $respas= mysqli_fetch_assoc($res);//implode("",(mysqli_fetch_row($res)));
        echo json_encode($respas);
        // echo("hello".$result_of_regnostr."hello");

   
    }
    else{
        echo json_encode("NC");//not user
    }
}
?>