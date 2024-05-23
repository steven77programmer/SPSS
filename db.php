<?php
$conn = mysqli_connect('sql112.infinityfree.com','if0_34419009','dCXhuPfmbSMj','if0_34419009_spss_db');
if(mysqli_connect_errno())
{
    die("Not connected");
}
else{
    // echo "Connection established";
    // $ins="INSERT INTO `student`(`control_id`, `roll_no`, `registered_no`, `email`) VALUES (2019040668,'3944A090',null,'rujiihelpdesk@gmail.com')";
    // $result_insert_student = mysqli_query($conn,$ins);
    // $ins="INSERT INTO `student`(`control_id`, `roll_no`, `registered_no`, `email`) VALUES (2019040667,'3944A080',null,'stephotos8@gmail.com')";
    // $result_insert_student = mysqli_query($conn,$ins);
    //  $ins="INSERT INTO `handler`(`hand_username`,`hand_password`,`hand_email`) VALUES ('handler_12345','handler@1029','handlerspss@gmail.com')";
    //  $result_insert_student = mysqli_query($conn,$ins);
    //  $ins="INSERT INTO `admin`(`admin_username`,`admin_password`,`admin_email`) VALUES ('admin_12345','admin@1029','spssadmi@gmail.com')";
    //  $result_insert_student = mysqli_query($conn,$ins);
    // $ins="INSERT INTO `session_tb`(`sess_username`, `sess_userstatus`) VALUES ('franky_super777','inactive')";
    // $result_insert_student = mysqli_query($conn,$ins);
    echo "Connection established";
}


?>