<?php
session_start();
$con = mysqli_connect('sql112.infinityfree.com','if0_34419009','dCXhuPfmbSMj','if0_34419009_spss_db');
$use=$_POST['use'];
$sql=mysqli_query($con,"UPDATE post SET post_status='removed' WHERE DATEDIFF(CURDATE(), verified_date)>3 and verified_date IS NOT null");
$res=mysqli_query($con,"SELECT * FROM post WHERE post_status='verified'");
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