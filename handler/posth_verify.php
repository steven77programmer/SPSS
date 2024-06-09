<?php
session_start();
$con = mysqli_connect('sql112.infinityfree.com','if0_34419009','dCXhuPfmbSMj','if0_34419009_spss_db');
$puse=$_POST['puse'];
$pid=$_POST['pid'];
$res=mysqli_query($con,"SELECT * FROM post WHERE post_status='to be verified' OR post_status='removed'");
$count=mysqli_num_rows($res);
if($count>0)
    {
        mysqli_query($con,"UPDATE `post` SET `post_status`='verified' WHERE post_pusername='$puse' and post_id='$pid'");
        mysqli_query($con,"UPDATE `post` SET `verified_date`=CURRENT_TIMESTAMP WHERE post_pusername='$puse' and post_id='$pid'");
        echo "V";
    }
    else{
    echo "NV";
    }
    ?>