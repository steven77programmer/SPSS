<?php
$con = mysqli_connect('sql112.infinityfree.com','if0_34419009','dCXhuPfmbSMj','if0_34419009_spss_db');
if(mysqli_connect_errno())
{
    die("Not connected");
}
if(!empty($_POST['control_id']) &&  !empty($_POST['roll_no']) && !empty($_POST['e_mail']))
{
    $control_id = mysqli_real_escape_string($con,$_POST['control_id']);
    $roll_no = mysqli_real_escape_string($con,$_POST['roll_no']);
    // $phone_no = mysqli_real_escape_string($con,$_POST['phone_no']);
    $e_mail = mysqli_real_escape_string($con,$_POST['e_mail']);
    $checking_existing_user = "SELECT roll_no FROM student WHERE control_id = '$control_id'";
    $result_of_existing_user = mysqli_query($con,$checking_existing_user);
    $checking_mail = "SELECT email FROM student WHERE control_id = '$control_id'";
    $result_of_mail=mysqli_query($con,$checking_mail);
$check_regno="SELECT registered_no FROM student WHERE control_id = '$control_id'";
$result_of_regno=mysqli_query($con,$check_regno);
    if(mysqli_num_rows($result_of_existing_user)>0)
    {
        $result_of_existing_userstr= implode("",(mysqli_fetch_row($result_of_existing_user)));
        $result_of_mailstr= implode("",(mysqli_fetch_row($result_of_mail)));
        $result_of_regnostr= implode("",(mysqli_fetch_row($result_of_regno)));
        // echo("hello".$result_of_regnostr."hello");
 if($result_of_regnostr!=""){//already registered error
    echo("EUEU");
 }
        else if($result_of_existing_userstr != $roll_no)
    {
        echo("EUNR");
    }
        else if($result_of_mailstr != $e_mail){
        echo("EUNE");
    }
    else{
        echo ("EU") ;//EXISTING USER
    }      
    }
    else{
        echo("NU");//not user
    }
}
?>