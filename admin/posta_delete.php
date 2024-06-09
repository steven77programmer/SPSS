<?php
session_start();
$con = mysqli_connect('sql112.infinityfree.com','if0_34419009','dCXhuPfmbSMj','if0_34419009_spss_db');
$puse=$_POST['puse'];
$pid=$_POST['pid'];
$res=mysqli_query($con,"SELECT * FROM post WHERE post_status='removed'");
$count=mysqli_num_rows($res);
if($count>0)
    {
        mysqli_query($con,"DELETE FROM `post` WHERE  post_id='$pid'");
        echo "R";
    }
    else{
    echo "NR";
    }
    ?>