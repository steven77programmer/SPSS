<?php
session_start();
$con = mysqli_connect('sql112.infinityfree.com','if0_34419009','dCXhuPfmbSMj','if0_34419009_spss_db');
$use=$_POST['use'];
// $st11='%'.$_POST['st'].' %';
// $st22='% '.$_POST['st'].' %';
// $st33='% '.$_POST['st'].'%';
// $st44='%'.$_POST['st'].'s%';
$st11="%".$_POST['st']." %";
$st22="% ".$_POST['st']." %";
$st33="% ".$_POST['st']."%";
$st44="%".$_POST['st']."s%";
 // Get user input
$st1 = mysqli_real_escape_string($con, $st11);
$st2 = mysqli_real_escape_string($con, $st22);
$st3 = mysqli_real_escape_string($con, $st33);
$st4 = mysqli_real_escape_string($con, $st44);
//$st4='%'.$_POST['st'].'%';
//$res=mysqli_query($con,"SELECT * FROM post WHERE post_status = 'to be verified' AND (post_title LIKE '$st1' OR post_title LIKE '$st2' OR post_title LIKE '$st3' OR post_title LIKE '$st4')");
$res=mysqli_query($con,"SELECT * FROM post WHERE post_status = 'to be verified' AND (post_title LIKE '$st1' OR post_title LIKE '$st2' OR post_title LIKE '$st3' OR post_title LIKE '$st4')");
$count=mysqli_num_rows($res);
if($count>0){
   $data=array();
  while($mypost= mysqli_fetch_assoc($res)){
   array_push($data,$mypost);
  }  
  echo json_encode($data);
}
else if($count==0){
    echo "zero";
}
else{
    echo "NF";
}
?>