<?php
session_start();
$con = mysqli_connect('sql112.infinityfree.com','if0_34419009','dCXhuPfmbSMj','if0_34419009_spss_db');
 $use=$_POST['use'];
$pid=$_POST['pid'];
$res=mysqli_query($con,"SELECT * FROM post WHERE post_status='verified'");
$count=mysqli_num_rows($res);
if($count>0)
    {
//if already voted the info will be in the table post_vote_tb    username and pv_id
$ress=mysqli_query($con,"SELECT * FROM `post_vote_tb` WHERE `username`='$use' AND `pv_id`='$pid';");
$countt=mysqli_num_rows($ress);
if($countt>0)
{
echo "AV";
}
else{
        $sql=mysqli_query($con,"SELECT post_votes FROM post WHERE post_id='$pid'");
        $pvote=implode('',mysqli_fetch_row($sql));
        $pvoten=(int)$pvote+1;
        $pvote=strval($pvoten);
        mysqli_query($con,"UPDATE `post` SET `post_votes`='$pvote' WHERE post_id='$pid'");
       // mysqli_query($con,"UPDATE `post` SET `verified_date`=CURRENT_TIMESTAMP WHERE post_pusername='$puse' and post_id='$pid'");
       mysqli_query($con,"INSERT INTO `post_vote_tb`(`username`, `pv_id`) VALUES ('$use','$pid')");
       echo $pvote;
}
    }
    else{
    echo "NV";
    }
    ?>